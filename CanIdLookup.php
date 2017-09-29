<?php

$CanIdArray = array(
                "360" => array (
                            "0" => array("CanID" => "0,1", "Name"=> "RPM", "Units" => "RPM", "Conversion" => "x"),
                            "2,3" => array("Name"=> "ManifoldPressure", "Units" => "kPa", "Conversion" => "x/10"),	
                            "4,5" => array("Name"=> "ThrottlePosition", "Units" => "%", "Conversion" => "x/10"),
                            "6,7" => array("Name"=> "CoolantPressure", "Units" => "kPa", "Conversion" => "x/10")
                        ),
                "361" => array (
                            "0,1" => array("Name"=> "FuelPressure", "Units" => "kPa", "Conversion" => "x/10"),
                            "2,3" => array("Name"=> "OilPressure", "Units" => "kPa", "Conversion" => "x/10"),	
                            "4,5" => array("Name"=> "EngineDemand", "Units" => "%", "Conversion" => "x/10"),
                            "6,7" => array("Name"=> "WastegatePressure", "Units" => "kPa", "Conversion" => "x/10")
                        ),
                "362" => array (
                            "0,1" => array("Name"=> "InjectionStage1DutyCycle", "Units" => "kPa", "Conversion" => "x/10"),
                            "2,3" => array("Name"=> "InjectionStage2DutyCycle", "Units" => "kPa", "Conversion" => "x/10"),	
                            "4,5" => array("Name"=> "IgnitionAngleLeading", "Units" => "Degrees", "Conversion" => "x/10")
                        ),
                "363" => array (
                            "0,1" => array("Name"=> "WheelSlop", "Units" => "kmh", "Conversion" => "x/10"),
                            "2,3" => array("Name"=> "WheelDiff", "Units" => "kmh", "Conversion" => "x/10")	
                        ),
                "369" => array (
                            "0,1" => array("Name"=> "WidebandSensor1", "Units" => "lamda", "Conversion" => "x/1000"),
                            "2,3" => array("Name"=> "WidebandSensor2", "Units" => "lamda", "Conversion" => "x/1000"),	
                            "4,5" => array("Name"=> "WidebandSensor3", "Units" => "lamda", "Conversion" => "x/1000"),
                            "6,7" => array("Name"=> "WidebandSensor4", "Units" => "lamda", "Conversion" => "x/1000")
                        ),
                "368" => array (
                            "0,1" => array("Name"=> "TriggerSystemErrorCount", "Units" => "int", "Conversion" => "x"),
                            "2,3" => array("Name"=> "TriggerCount", "Units" => "int", "Conversion" => "x"),	
                            "6,7" => array("Name"=> "TriggerSyncLevel", "Units" => "int", "Conversion" => "x")
                        ),
                "36A" => array (
                            "0,1" => array("Name"=> "KnockLevel", "Units" => "dB", "Conversion" => "x/100"),
                            "2,3" => array("Name"=> "KnockLevel", "Units" => "dB", "Conversion" => "x/100")	
                        ),
                "36B" => array (
                            "0,1" => array("Name"=> "BrakePressure", "Units" => "kPa", "Conversion" => "x/10"),
                            "2,3" => array("Name"=> "NOSPressureSensor1", "Units" => "kPa", "Conversion" => "x*11/50"),	
                            "4,5" => array("Name"=> "TurboSpeedSensor1", "Units" => "RPM", "Conversion" => "x*10"),
                            "6,7" => array("Name"=> "LateralG", "Units" => "m/s*s", "Conversion" => "x/10")
                        ),
                "36C" => array (
                            "0,1" => array("Name"=> "WheelSpeedFrontLeft", "Units" => "kmh", "Conversion" => "x/10"),
                            "2,3" => array("Name"=> "WheelSpeedFrontRight", "Units" => "kmh", "Conversion" => "x/10"),	
                            "4,5" => array("Name"=> "WheelSpeedRearLeft", "Units" => "kmh", "Conversion" => "x/10"),
                            "6,7" => array("Name"=> "WheelSpeedRearRight", "Units" => "kmh", "Conversion" => "x/10")
                        ),
                "36D" => array (
                            "4,5" => array("Name"=> "ExhaustCamAngle1", "Units" => "Degrees", "Conversion" => "x/10"),
                            "6,7" => array("Name"=> "ExhaustCamAngle2", "Units" => "Degrees", "Conversion" => "x/10")	
                        ),
                "36E" => array (
                            "0,1" => array("Name"=> "EngineLimitActive", "Units" => "bool", "Conversion" => "x"),
                            "2,3" => array("Name"=> "LaunchControlIgnitionRetard", "Units" => "Degrees", "Conversion" => "x/10"),	
                            "4,5" => array("Name"=> "LaunchControlFuelEnrich", "Units" => "%", "Conversion" => "x/10"),
                            "6,7" => array("Name"=> "LongitudinalG", "Units" => "m/s*s", "Conversion" => "x/10")
                        ),    
                "36F" => array (
                            "0,1" => array("Name"=> "GenericOutputDutyCycle1", "Units" => "%", "Conversion" => "x/10"),
                            "2,3" => array("Name"=> "BoostControlOutput", "Units" => "%", "Conversion" => "x/10")	
                        ),
                "370" => array (
                            "0,1" => array("Name"=> "VehicleSpeed", "Units" => "kmh", "Conversion" => "x/10"),
                            "2,3" => array("Name"=> "gear", "Units" => "int", "Conversion" => "x"),	
                            "4,5" => array("Name"=> "IntakeCamAngle1", "Units" => "Degrees", "Conversion" => "x/10"),
                            "6,7" => array("Name"=> "IntakeCamAngle2", "Units" => "Degrees", "Conversion" => "x/10")
                        ), 
                "371" => array (
                            "0,1" => array("Name"=> "FuelFlow", "Units" => "cc/min", "Conversion" => "x"),
                            "2,3" => array("Name"=> "FuelFlowReturn", "Units" => "cc/min", "Conversion" => "x")	
                        ),    
                "372" => array (
                            "0,1" => array("Name"=> "BatteryVoltage", "Units" => "Volts", "Conversion" => "x/10"),
                            "4,5" => array("Name"=> "TargetBoostLevel", "Units" => "kPa", "Conversion" => "x/10"),
                            "6,7" => array("Name"=> "BarometricPressure", "Units" => "kPa", "Conversion" => "x/10")
                        ), 
                "373" => array (
                            "0,1" => array("Name"=> "EGTSensor1", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "2,3" => array("Name"=> "EGTSensor2", "Units" => "DegreesK", "Conversion" => "x/10"),	
                            "4,5" => array("Name"=> "EGTSensor3", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "6,7" => array("Name"=> "EGTSensor4", "Units" => "DegreesK", "Conversion" => "x/10")
                        ),   
                "374" => array (
                            "0,1" => array("Name"=> "EGTSensor5", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "2,3" => array("Name"=> "EGTSensor6", "Units" => "DegreesK", "Conversion" => "x/10"),	
                            "4,5" => array("Name"=> "EGTSensor7", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "6,7" => array("Name"=> "EGTSensor8", "Units" => "DegreesK", "Conversion" => "x/10")
                        ),   
                "375" => array (
                            "0,1" => array("Name"=> "EGTSensor9", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "2,3" => array("Name"=> "EGTSensor10", "Units" => "DegreesK", "Conversion" => "x/10"),	
                            "4,5" => array("Name"=> "EGTSensor11", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "6,7" => array("Name"=> "EGTSensor12", "Units" => "DegreesK", "Conversion" => "x/10")
                        ),          
                "3E0" => array (
                            "0,1" => array("Name"=> "CoolantTemperature", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "2,3" => array("Name"=> "AirTemperature", "Units" => "DegreesK", "Conversion" => "x/10"),	
                            "4,5" => array("Name"=> "FuelTemperature", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "6,7" => array("Name"=> "OilTemperature", "Units" => "DegreesK", "Conversion" => "x/10")
                        ),      
                 "3E1" => array (
                            "0,1" => array("Name"=> "GearboxOilTemperature", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "2,3" => array("Name"=> "DiffTemperature", "Units" => "DegreesK", "Conversion" => "x/10"),	
                            "4,5" => array("Name"=> "FuelConsumption", "Units" => "%", "Conversion" => "x/10")
                        ),  
                 "3E2" => array (
                            "0,1" => array("Name"=> "FuelLevel", "Units" => "L", "Conversion" => "x/10")
                        ),     
                 "3E3" => array (
                            "0,1" => array("Name"=> "FuelTrimShortTermBank1", "Units" => "%", "Conversion" => "x/10"),
                            "2,3" => array("Name"=> "FuelTrimShortTermBank1", "Units" => "%", "Conversion" => "x/10"),	
                            "4,5" => array("Name"=> "FuelTrimLongTermBank1", "Units" => "%", "Conversion" => "x/10"),
                            "6,7" => array("Name"=> "FuelTrimLongTermBank2", "Units" => "%", "Conversion" => "x/10")
                        ), 
                 "3E4" => array (
                            "1:1" => array("Name"=> "ClutchSwitch", "Units" => "int", "Conversion" => "x"),
                            "1:2" => array("Name"=> "BrakePedalSwitch", "Units" => "int", "Conversion" => "x"),
                            "1:3" => array("Name"=> "TransientThrottleActive", "Units" => "int", "Conversion" => "x"),
                            "1:4" => array("Name"=> "DecelCutActive", "Units" => "int", "Conversion" => "x"),
                            "2:1" => array("Name"=> "TorqueReductionActive", "Units" => "int", "Conversion" => "x"),
                            "2:3" => array("Name"=> "FlatShiftSwitch", "Units" => "int", "Conversion" => "x"),
                            "2:5" => array("Name"=> "AuxRPMLimiterActive", "Units" => "int", "Conversion" => "x"),
                            "2:7" => array("Name"=> "AntiLagActive", "Units" => "int", "Conversion" => "x"),
                            "7:6" => array("Name"=> "BatteryLightActive", "Units" => "int", "Conversion" => "x"),
                            "7:7" => array("Name"=> "CheckEngineLight", "Units" => "int", "Conversion" => "x")
                        ), 
    
                 "3E5" => array (
                            "0" => array("Name"=> "IgnitionSwitch", "Units" => "int", "Conversion" => "x"),
                            "1" => array("Name"=> "TurboTimerTimeRemaining", "Units" => "int", "Conversion" => "x"),
                            "4,5" => array("Name"=> "SteeringWheelAngle", "Units" => "int", "Conversion" => "x/10"),
                            "6,7" => array("Name"=> "DriveshaftRPM", "Units" => "RPM", "Conversion" => "x")
                        ),     
                 "3E6" => array (
                            "0,1" => array("Name"=> "NOSPressureSensor2", "Units" => "kPa", "Conversion" => "x*11/50"),
                            "2,3" => array("Name"=> "NOSPressureSensor3", "Units" => "kPa", "Conversion" => "x*11/50"),
                            "4,5" => array("Name"=> "NOSPressureSensor3", "Units" => "kPa", "Conversion" => "x*11/50"),
                            "6,7" => array("Name"=> "TurboSpeedSensor2", "Units" => "RPM", "Conversion" => "x*10")
                        ),  
                );



?>
