<?php

$CanIdArray = array(
                "360" => array (
                            "0" => array("Position" => "0,1", "Name"=> "RPM", "Units" => "RPM", "Conversion" => "x"),
                            "1" => array("Position" => "2,3","Name"=> "ManifoldPressure", "Units" => "kPa", "Conversion" => "x/10"),	
                            "2" => array("Position" => "4,5", "Name"=> "ThrottlePosition", "Units" => "%", "Conversion" => "x/10"),
                            "3" => array("Position" => "6,7", "Name"=> "CoolantPressure", "Units" => "kPa", "Conversion" => "x/10")
                        ),
                "361" => array (
                            "0" => array("Position" => "0,1", "Name"=> "FuelPressure", "Units" => "kPa", "Conversion" => "x/10"),
                            "1" => array("Position" => "2,3", "Name"=> "OilPressure", "Units" => "kPa", "Conversion" => "x/10"),	
                            "2" => array("Position" => "4,5", "Name"=> "EngineDemand", "Units" => "%", "Conversion" => "x/10"),
                            "3" => array("Position" => "6,7", "Name"=> "WastegatePressure", "Units" => "kPa", "Conversion" => "x/10")
                        ),
                "362" => array (
                            "0" => array("Position" => "0,1", "Name"=> "InjectionStage1DutyCycle", "Units" => "kPa", "Conversion" => "x/10"),
                            "1" => array("Position" => "2,3", "Name"=> "InjectionStage2DutyCycle", "Units" => "kPa", "Conversion" => "x/10"),
                            "2" => array("Position" => "4,5", "Name"=> "IgnitionAngleLeading", "Units" => "Degrees", "Conversion" => "x/10")
                        ),
                "363" => array (
                            "0" => array("Position" => "0,1", "Name"=> "WheelSlop", "Units" => "kmh", "Conversion" => "x/10"),
                            "1" => array("Position" => "2,3", "Name"=> "WheelDiff", "Units" => "kmh", "Conversion" => "x/10")	
                        ),
                "369" => array (
                            "0" => array("Position" => "0,1", "Name"=> "WidebandSensor1", "Units" => "lamda", "Conversion" => "x/1000"),
                            "1" => array("Position" => "2,3", "Name"=> "WidebandSensor2", "Units" => "lamda", "Conversion" => "x/1000"),	
                            "2" => array("Position" => "4,5", "Name"=> "WidebandSensor3", "Units" => "lamda", "Conversion" => "x/1000"),
                            "3" => array("Position" => "6,7", "Name"=> "WidebandSensor4", "Units" => "lamda", "Conversion" => "x/1000")
                        ),
                "368" => array (
                            "0" => array("Position" => "0,1", "Name"=> "TriggerSystemErrorCount", "Units" => "int", "Conversion" => "x"),
                            "1" => array("Position" => "2,3", "Name"=> "TriggerCount", "Units" => "int", "Conversion" => "x"),	
                            "2" => array("Position" => "6,7", "Name"=> "TriggerSyncLevel", "Units" => "int", "Conversion" => "x")
                        ),
                "36A" => array (
                            "0" => array("Position" => "0,1", "Name"=> "KnockLevel", "Units" => "dB", "Conversion" => "x/100"),
                            "1" => array("Position" => "2,3", "Name"=> "KnockLevel", "Units" => "dB", "Conversion" => "x/100")	
                        ),
                "36B" => array (
                            "0" => array("Position" => "0,1", "Name"=> "BrakePressure", "Units" => "kPa", "Conversion" => "x/10"),
                            "1" => array("Position" => "2,3", "Name"=> "NOSPressureSensor1", "Units" => "kPa", "Conversion" => "x*11/50"),	
                            "2" => array("Position" => "4,5", "Name"=> "TurboSpeedSensor1", "Units" => "RPM", "Conversion" => "x*10"),
                            "3" => array("Position" => "6,7", "Name"=> "LateralG", "Units" => "m/s*s", "Conversion" => "x/10")
                        ),
                "36C" => array (
                            "0" => array("Position" => "0,1", "Name"=> "WheelSpeedFrontLeft", "Units" => "kmh", "Conversion" => "x/10"),
                            "1" => array("Position" => "2,3", "Name"=> "WheelSpeedFrontRight", "Units" => "kmh", "Conversion" => "x/10"),	
                            "2" => array("Position" => "4,5", "Name"=> "WheelSpeedRearLeft", "Units" => "kmh", "Conversion" => "x/10"),
                            "3" => array("Position" => "6,7", "Name"=> "WheelSpeedRearRight", "Units" => "kmh", "Conversion" => "x/10")
                        ),
                "36D" => array (
                            "0" => array("Position" => "4,5", "Name"=> "ExhaustCamAngle1", "Units" => "Degrees", "Conversion" => "x/10"),
                            "1" => array("Position" => "6,7", "Name"=> "ExhaustCamAngle2", "Units" => "Degrees", "Conversion" => "x/10")	
                        ),
                "36E" => array (
                            "0" => array("Position" => "0,1", "Name"=> "EngineLimitActive", "Units" => "bool", "Conversion" => "x"),
                            "1" => array("Position" => "2,3", "Name"=> "LaunchControlIgnitionRetard", "Units" => "Degrees", "Conversion" => "x/10"),	
                            "2" => array("Position" => "4,5", "Name"=> "LaunchControlFuelEnrich", "Units" => "%", "Conversion" => "x/10"),
                            "3" => array("Position" => "6,7", "Name"=> "LongitudinalG", "Units" => "m/s*s", "Conversion" => "x/10")
                        ),    
                "36F" => array (
                            "0" => array("Position" => "0,1", "Name"=> "GenericOutputDutyCycle1", "Units" => "%", "Conversion" => "x/10"),
                            "1" => array("Position" => "2,3", "Name"=> "BoostControlOutput", "Units" => "%", "Conversion" => "x/10")	
                        ),
                "370" => array (
                            "0" => array("Position" => "0,1", "Name"=> "VehicleSpeed", "Units" => "kmh", "Conversion" => "x/10"),
                            "1" => array("Position" => "2,3", "Name"=> "gear", "Units" => "int", "Conversion" => "x"),	
                            "2" => array("Position" => "4,5", "Name"=> "IntakeCamAngle1", "Units" => "Degrees", "Conversion" => "x/10"),
                            "3" => array("Position" => "6,7", "Name"=> "IntakeCamAngle2", "Units" => "Degrees", "Conversion" => "x/10")
                        ), 
                "371" => array (
                            "0" => array("Position" => "0,1", "Name"=> "FuelFlow", "Units" => "cc/min", "Conversion" => "x"),
                            "1" => array("Position" => "2,3", "Name"=> "FuelFlowReturn", "Units" => "cc/min", "Conversion" => "x")	
                        ),    
                "372" => array (
                            "0" => array("Position" => "0,1", "Name"=> "BatteryVoltage", "Units" => "Volts", "Conversion" => "x/10"),
                            "1" => array("Position" => "4,5", "Name"=> "TargetBoostLevel", "Units" => "kPa", "Conversion" => "x/10"),
                            "2" => array("Position" => "6,7", "Name"=> "BarometricPressure", "Units" => "kPa", "Conversion" => "x/10")
                        ), 
                "373" => array (
                            "0" => array("Position" => "0,1", "Name"=> "EGTSensor1", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "1" => array("Position" => "2,3", "Name"=> "EGTSensor2", "Units" => "DegreesK", "Conversion" => "x/10"),	
                            "2" => array("Position" => "4,5", "Name"=> "EGTSensor3", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "3" => array("Position" => "6,7", "Name"=> "EGTSensor4", "Units" => "DegreesK", "Conversion" => "x/10")
                        ),   
                "374" => array (
                            "0" => array("Position" => "0,1", "Name"=> "EGTSensor5", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "1" => array("Position" => "2,3", "Name"=> "EGTSensor6", "Units" => "DegreesK", "Conversion" => "x/10"),	
                            "2" => array("Position" => "4,5", "Name"=> "EGTSensor7", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "3" => array("Position" => "6,7", "Name"=> "EGTSensor8", "Units" => "DegreesK", "Conversion" => "x/10")
                        ),   
                "375" => array (
                            "0" => array("Position" => "0,1", "Name"=> "EGTSensor9", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "1" => array("Position" => "2,3", "Name"=> "EGTSensor10", "Units" => "DegreesK", "Conversion" => "x/10"),	
                            "2" => array("Position" => "4,5", "Name"=> "EGTSensor11", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "3" => array("Position" => "6,7", "Name"=> "EGTSensor12", "Units" => "DegreesK", "Conversion" => "x/10")
                        ),          
                "3E0" => array (
                            "0" => array("Position" => "0,1", "Name"=> "CoolantTemperature", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "1" => array("Position" => "2,3", "Name"=> "AirTemperature", "Units" => "DegreesK", "Conversion" => "x/10"),	
                            "2" => array("Position" => "4,5", "Name"=> "FuelTemperature", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "3" => array("Position" => "6,7", "Name"=> "OilTemperature", "Units" => "DegreesK", "Conversion" => "x/10")
                        ),      
                 "3E1" => array (
                            "0" => array("Position" => "0,1", "Name"=> "GearboxOilTemperature", "Units" => "DegreesK", "Conversion" => "x/10"),
                            "1" => array("Position" => "2,3", "Name"=> "DiffTemperature", "Units" => "DegreesK", "Conversion" => "x/10"),	
                            "2" => array("Position" => "4,5", "Name"=> "FuelConsumption", "Units" => "%", "Conversion" => "x/10")
                        ),  
                 "3E2" => array (
                            "0" => array("Position" => "0,1", "Name"=> "FuelLevel", "Units" => "L", "Conversion" => "x/10")
                        ),     
                 "3E3" => array (
                            "0" => array("Position" => "0,1", "Name"=> "FuelTrimShortTermBank1", "Units" => "%", "Conversion" => "x/10"),
                            "1" => array("Position" => "2,3", "Name"=> "FuelTrimShortTermBank1", "Units" => "%", "Conversion" => "x/10"),	
                            "2" => array("Position" => "4,5", "Name"=> "FuelTrimLongTermBank1", "Units" => "%", "Conversion" => "x/10"),
                            "3" => array("Position" => "6,7", "Name"=> "FuelTrimLongTermBank2", "Units" => "%", "Conversion" => "x/10")
                        ), 
                 "3E4" => array (
                            "0" => array("Position" => "1:1", "Name"=> "ClutchSwitch", "Units" => "int", "Conversion" => "x"),
                            "1" => array("Position" => "1:2", "Name"=> "BrakePedalSwitch", "Units" => "int", "Conversion" => "x"),
                            "2" => array("Position" => "1:3", "Name"=> "TransientThrottleActive", "Units" => "int", "Conversion" => "x"),
                            "3" => array("Position" => "1:4", "Name"=> "DecelCutActive", "Units" => "int", "Conversion" => "x"),
                            "4" => array("Position" => "2:1", "Name"=> "TorqueReductionActive", "Units" => "int", "Conversion" => "x"),
                            "5" => array("Position" => "2:3", "Name"=> "FlatShiftSwitch", "Units" => "int", "Conversion" => "x"),
                            "6" => array("Position" => "2:5", "Name"=> "AuxRPMLimiterActive", "Units" => "int", "Conversion" => "x"),
                            "7" => array("Position" => "2:7", "Name"=> "AntiLagActive", "Units" => "int", "Conversion" => "x"),
                            "8" => array("Position" => "7:6", "Name"=> "BatteryLightActive", "Units" => "int", "Conversion" => "x"),
                            "9" => array("Position" => "7:7", "Name"=> "CheckEngineLight", "Units" => "int", "Conversion" => "x")
                        ), 
    
                 "3E5" => array (
                            "0" => array("Position" => "0", "Name"=> "IgnitionSwitch", "Units" => "int", "Conversion" => "x"),
                            "1" => array("Position" => "1", "Name"=> "TurboTimerTimeRemaining", "Units" => "int", "Conversion" => "x"),
                            "2" => array("Position" => "4,5", "Name"=> "SteeringWheelAngle", "Units" => "int", "Conversion" => "x/10"),
                            "3" => array("Position" => "6,7", "Name"=> "DriveshaftRPM", "Units" => "RPM", "Conversion" => "x")
                        ),     
                 "3E6" => array (
                            "0" => array("Position" => "0,1", "Name"=> "NOSPressureSensor2", "Units" => "kPa", "Conversion" => "x*11/50"),
                            "1" => array("Position" => "2,3", "Name"=> "NOSPressureSensor3", "Units" => "kPa", "Conversion" => "x*11/50"),
                            "2" => array("Position" => "4,5", "Name"=> "NOSPressureSensor3", "Units" => "kPa", "Conversion" => "x*11/50"),
                            "3" => array("Position" => "6,7", "Name"=> "TurboSpeedSensor2", "Units" => "RPM", "Conversion" => "x*10")
                        ),  
    
                //there are more arrays to add here...
    
    
                );



?>
