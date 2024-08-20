<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ManualMode;
use App\Models\ManualMotors;
use App\Models\ManualTanks;
use App\Models\ManualValves;
use App\Models\Motor;
use App\Models\Tank;
use App\Models\Valve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpMqtt\Client\MqttClient;
use PhpMqtt\Client\Exceptions\MqttClientException;
use PhpMqtt\Client\ConnectionSettings;

class ManualModeController extends Controller
{
    public function manual_index()
    {
        $motors = Motor::where('userid', '=', Auth::user()->id)->get();
        $valves = Valve::where('userid', '=', Auth::user()->id)->get();
        $tanks = Tank::where('userid', '=', Auth::user()->id)->get();
        $data = compact('motors', 'valves', 'tanks');
        return view('pages.manual-mode')->with($data);
    }

    public function insert_manual(Request $request)
    {
        // return view('pages.manual');
        $request->validate([
            'tanks' => 'required',
            'durations' => 'required',
            'pre_water_time' => 'required',
            'ph' => 'required',
            'valves' => 'nullable',
            'motors' => 'required',
            'injector_control' => 'nullable',
            'lph' => 'required',
            'tank_sequence' => 'nullable',
            'acid_tank' => 'nullable',
            'post_water_time' => 'required',
        ]);

        $userId = auth()->id();
        $mqttstrid = uniqid();

        foreach ($request->tanks as $index => $tank) {
            $manualTank = new ManualTanks();
            $manualTank->userid = $userId;
            $manualTank->duration = $request->durations[$index];
            $manualTank->strid = $mqttstrid;
            $manualTank->tanks = $tank;
            $manualTank->save();
        }

        foreach ($request->valves as $valve) {
            $manualValve = new ManualValves();
            $manualValve->userid = $userId;
            $manualValve->strid = $mqttstrid;
            $manualValve->valves = $valve;
            $manualValve->save();
        }

        foreach ($request->motors as $motor) {
            $manualMotor = new ManualMotors();
            $manualMotor->userid = $userId;
            $manualMotor->strid = $mqttstrid;
            $manualMotor->motors = $motor;
            $manualMotor->save();
        }

        $manualmode = new ManualMode();        
        $manualmode->userid = Auth::user()->id;
        $manualmode->strid = $mqttstrid;
        $pre_water_time = $manualmode->pre_water_time = $request->pre_water_time;
        $ph = $manualmode->ph = $request->ph;
        $injector_control = $manualmode->injector_control = $request->injector_control;
        $lph = $manualmode->lph = $request->lph;
        $tank_sequence = $manualmode->tank_sequence = $request->tank_sequence;
        $acid_tank = $manualmode->acid_tank = $request->acid_tank;
        $post_water_time = $manualmode->post_water_time = $request->post_water_time;

        // $strid = rand(111111,999999);

        // $dataString = "M: $tanks;$durations;$pre_water_time;$ph;$valves;$motors;$injector_control;$lph;$tank_sequence;$acid_tank;$post_water_time";

        // $manualmode->dataString = $dataString;

        $save = $manualmode->save();

        $mqttString = $this->generateMqttString($request, $mqttstrid);

        return response()->json(['mqtt_string' => $mqttString]);

        if($save)
        {
            return redirect()->back()->with('Success', 'Manual Mode settings saved successfully!');
        }
        else
        {
            return redirect()->back()->with('fail', 'Something went wrong!!!');
        }
        // return redirect()->route('manual.mode')->with('Success', 'Manual Mode settings saved successfully.');
    }

    private function generateMqttString($request, $mqttstrid)
    {
        $injectorControl = $request->injector_control ? 'ON' : 'OFF';
        $tankSequence = $request->tank_sequence ? 'ON' : 'OFF';
        $acidTank = $request->acid_tank ? 'ON' : 'OFF';

        $tanks = implode(',', $request->tanks);
        $durations = implode(',', $request->durations);
        $valves = implode(',', $request->valves);
        $motors = implode(',', $request->motors);

        $mqttString = "ManualModeID:{$mqttstrid},Tanks:{$tanks},Durations:{$durations},PreWaterTime:{$request->pre_water_time},PH:{$request->ph},Valves:{$valves},Motors:{$motors},InjectorControl:{$injectorControl},LPH:{$request->lph},TankSequence:{$tankSequence},AcidTank:{$acidTank},PostWaterTime:{$request->post_water_time}";

        session()->put('mqttstr', $mqttString);

        return $this->connectAndPublish();

        session()->forget('mqttstr');
        // return $mqttString;
    }

    public function connectAndPublish()
    {

        $broker = env('MQTT_BROKER');
        $port = env('MQTT_PORT');
        $clientId = '123456';
        // MQTT broker settings
        // $server   = 'broker.hivemq.com';  // Change to your MQTT broker's address
        // $port     = 1883;                 // Default MQTT port for non-TLS connections
        // $clientId = 'laravel-mqtt-client'; // A unique client ID

        // Connection settings without username and password
        $connectionSettings = (new ConnectionSettings)
            ->setKeepAliveInterval(60)    // Keep alive interval in seconds
            ->setLastWillTopic('test/last-will')  // Optional: Set the last will topic
            ->setLastWillMessage('Client disconnected unexpectedly')  // Optional: Set the last will message
            ->setLastWillQualityOfService(0);

        // Create the MQTT client instance
        $mqtt = new MqttClient($broker, $port, $clientId);

        // Connect to the broker
        $mqtt->connect($connectionSettings, true);

        $string = session()->get('mqttstr');
        // Publish a message to a topic
        $mqtt->publish('66c4ddf896433/p/SAIF/v1/raw', $string, MqttClient::QOS_AT_MOST_ONCE);

        // Disconnect from the broker
        $mqtt->disconnect();

        return response()->json(['status' => 'Message published successfully']);
    }


    public function mq()
    {
        $broker = env('MQTT_BROKER');
        $port = env('MQTT_PORT');
        $clientId = '123456';
    }



}
