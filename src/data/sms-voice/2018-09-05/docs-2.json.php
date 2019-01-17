<?php
// This file was auto-generated from sdk-root/src/data/sms-voice/2018-09-05/docs-2.json
return [ 'version' => '2.0', 'service' => 'Pinpoint SMS and Voice Messaging public facing APIs', 'operations' => [ 'CreateConfigurationSet' => 'Create a new configuration set. After you create the configuration set, you can add one or more event destinations to it.', 'CreateConfigurationSetEventDestination' => 'Create a new event destination in a configuration set.', 'DeleteConfigurationSet' => 'Deletes an existing configuration set.', 'DeleteConfigurationSetEventDestination' => 'Deletes an event destination in a configuration set.', 'GetConfigurationSetEventDestinations' => 'Obtain information about an event destination, including the types of events it reports, the Amazon Resource Name (ARN) of the destination, and the name of the event destination.', 'SendVoiceMessage' => 'Create a new voice message and send it to a recipient\'s phone number.', 'UpdateConfigurationSetEventDestination' => 'Update an event destination in a configuration set. An event destination is a location that you publish information about your voice calls to. For example, you can log an event to an Amazon CloudWatch destination when a call fails.', ], 'shapes' => [ 'Boolean' => [ 'base' => NULL, 'refs' => [ 'EventDestination$Enabled' => 'Indicates whether or not the event destination is enabled. If the event destination is enabled, then Amazon Pinpoint sends response data to the specified event destination.', 'EventDestinationDefinition$Enabled' => 'Indicates whether or not the event destination is enabled. If the event destination is enabled, then Amazon Pinpoint sends response data to the specified event destination.', ], ], 'CallInstructionsMessageType' => [ 'base' => 'An object that defines a message that contains text formatted using Amazon Pinpoint Voice Instructions markup.', 'refs' => [ 'VoiceMessageContent$CallInstructionsMessage' => NULL, ], ], 'CloudWatchLogsDestination' => [ 'base' => 'An object that contains information about an event destination that sends data to Amazon CloudWatch Logs.', 'refs' => [ 'EventDestination$CloudWatchLogsDestination' => NULL, 'EventDestinationDefinition$CloudWatchLogsDestination' => NULL, ], ], 'CreateConfigurationSetEventDestinationRequest' => [ 'base' => 'Create a new event destination in a configuration set.', 'refs' => [], ], 'CreateConfigurationSetEventDestinationResponse' => [ 'base' => 'An empty object that indicates that the event destination was created successfully.', 'refs' => [], ], 'CreateConfigurationSetRequest' => [ 'base' => 'A request to create a new configuration set.', 'refs' => [], ], 'CreateConfigurationSetResponse' => [ 'base' => 'An empty object that indicates that the configuration set was successfully created.', 'refs' => [], ], 'DeleteConfigurationSetEventDestinationResponse' => [ 'base' => 'An empty object that indicates that the event destination was deleted successfully.', 'refs' => [], ], 'DeleteConfigurationSetResponse' => [ 'base' => 'An empty object that indicates that the configuration set was deleted successfully.', 'refs' => [], ], 'EventDestination' => [ 'base' => 'An object that defines an event destination.', 'refs' => [ 'EventDestinations$member' => NULL, ], ], 'EventDestinationDefinition' => [ 'base' => 'An object that defines a single event destination.', 'refs' => [ 'CreateConfigurationSetEventDestinationRequest$EventDestination' => NULL, 'UpdateConfigurationSetEventDestinationRequest$EventDestination' => NULL, ], ], 'EventDestinations' => [ 'base' => 'An array of EventDestination objects. Each EventDestination object includes ARNs and other information that define an event destination.', 'refs' => [ 'GetConfigurationSetEventDestinationsResponse$EventDestinations' => NULL, ], ], 'EventType' => [ 'base' => 'The types of events that are sent to the event destination.', 'refs' => [ 'EventTypes$member' => NULL, ], ], 'EventTypes' => [ 'base' => 'An array of EventDestination objects. Each EventDestination object includes ARNs and other information that define an event destination.', 'refs' => [ 'EventDestination$MatchingEventTypes' => NULL, 'EventDestinationDefinition$MatchingEventTypes' => NULL, ], ], 'GetConfigurationSetEventDestinationsResponse' => [ 'base' => 'An object that contains information about an event destination.', 'refs' => [], ], 'InternalServiceErrorException' => [ 'base' => 'The API encountered an unexpected error and couldn\'t complete the request. You might be able to successfully issue the request again in the future.', 'refs' => [], ], 'KinesisFirehoseDestination' => [ 'base' => 'An object that contains information about an event destination that sends data to Amazon Kinesis Data Firehose.', 'refs' => [ 'EventDestination$KinesisFirehoseDestination' => NULL, 'EventDestinationDefinition$KinesisFirehoseDestination' => NULL, ], ], 'NonEmptyString' => [ 'base' => NULL, 'refs' => [ 'CallInstructionsMessageType$Text' => 'The language to use when delivering the message. For a complete list of supported languages, see the Amazon Polly Developer Guide.', 'CreateConfigurationSetEventDestinationRequest$EventDestinationName' => 'A name that identifies the event destination.', 'PlainTextMessageType$Text' => 'The plain (not SSML-formatted) text to deliver to the recipient.', 'SSMLMessageType$Text' => 'The SSML-formatted text to deliver to the recipient.', 'SendVoiceMessageRequest$DestinationPhoneNumber' => 'The phone number that you want to send the voice message to.', 'SendVoiceMessageRequest$OriginationPhoneNumber' => 'The phone number that Amazon Pinpoint should use to send the voice message. This isn\'t necessarily the phone number that appears on recipients\' devices when they receive the message, because you can specify a CallerId parameter in the request.', ], ], 'PlainTextMessageType' => [ 'base' => 'An object that defines a message that contains unformatted text.', 'refs' => [ 'VoiceMessageContent$PlainTextMessage' => NULL, ], ], 'SSMLMessageType' => [ 'base' => 'An object that defines a message that contains SSML-formatted text.', 'refs' => [ 'VoiceMessageContent$SSMLMessage' => NULL, ], ], 'SendVoiceMessageRequest' => [ 'base' => 'A request to create and send a new voice message.', 'refs' => [], ], 'SendVoiceMessageResponse' => [ 'base' => 'An object that that contains the Message ID of a Voice message that was sent successfully.', 'refs' => [], ], 'SnsDestination' => [ 'base' => 'An object that contains information about an event destination that sends data to Amazon SNS.', 'refs' => [ 'EventDestination$SnsDestination' => NULL, 'EventDestinationDefinition$SnsDestination' => NULL, ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'CloudWatchLogsDestination$IamRoleArn' => 'The Amazon Resource Name (ARN) of an Amazon Identity and Access Management (IAM) role that is able to write event data to an Amazon CloudWatch destination.', 'CloudWatchLogsDestination$LogGroupArn' => 'The name of the Amazon CloudWatch Log Group that you want to record events in.', 'EventDestination$Name' => 'A name that identifies the event destination configuration.', 'InternalServiceErrorException$Message' => NULL, 'KinesisFirehoseDestination$DeliveryStreamArn' => 'The Amazon Resource Name (ARN) of an IAM role that can write data to an Amazon Kinesis Data Firehose stream.', 'KinesisFirehoseDestination$IamRoleArn' => 'The Amazon Resource Name (ARN) of the Amazon Kinesis Data Firehose destination that you want to use in the event destination.', 'PlainTextMessageType$LanguageCode' => 'The language to use when delivering the message. For a complete list of supported languages, see the Amazon Polly Developer Guide.', 'PlainTextMessageType$VoiceId' => 'The name of the voice that you want to use to deliver the message. For a complete list of supported voices, see the Amazon Polly Developer Guide.', 'SSMLMessageType$LanguageCode' => 'The language to use when delivering the message. For a complete list of supported languages, see the Amazon Polly Developer Guide.', 'SSMLMessageType$VoiceId' => 'The name of the voice that you want to use to deliver the message. For a complete list of supported voices, see the Amazon Polly Developer Guide.', 'SendVoiceMessageRequest$CallerId' => 'The phone number that appears on recipients\' devices when they receive the message.', 'SendVoiceMessageResponse$MessageId' => 'A unique identifier for the voice message.', 'SnsDestination$TopicArn' => 'The Amazon Resource Name (ARN) of the Amazon SNS topic that you want to publish events to.', ], ], 'UpdateConfigurationSetEventDestinationRequest' => [ 'base' => 'An object that defines a request to update an existing event destination.', 'refs' => [], ], 'UpdateConfigurationSetEventDestinationResponse' => [ 'base' => 'An empty object that indicates that the event destination was updated successfully.', 'refs' => [], ], 'VoiceMessageContent' => [ 'base' => 'An object that contains a voice message and information about the recipient that you want to send it to.', 'refs' => [ 'SendVoiceMessageRequest$Content' => NULL, ], ], 'WordCharactersWithDelimiters' => [ 'base' => NULL, 'refs' => [ 'CreateConfigurationSetRequest$ConfigurationSetName' => 'The name that you want to give the configuration set.', 'SendVoiceMessageRequest$ConfigurationSetName' => 'The name of the configuration set that you want to use to send the message.', ], ], ],];
