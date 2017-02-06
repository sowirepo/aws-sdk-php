<?php
// This file was auto-generated from sdk-root/src/data/application-autoscaling/2016-02-06/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'DeleteScalingPolicy' => [ [ 'input' => [ 'PolicyName' => 'web-app-cpu-lt-25', 'ResourceId' => 'service/default/web-app', 'ScalableDimension' => 'ecs:service:DesiredCount', 'ServiceNamespace' => 'ecs', ], 'output' => [], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example deletes a scaling policy for the Amazon ECS service called web-app, which is running in the default cluster.', 'id' => 'to-delete-a-scaling-policy-1470863892689', 'title' => 'To delete a scaling policy', ], ], 'DeregisterScalableTarget' => [ [ 'input' => [ 'ResourceId' => 'service/default/web-app', 'ScalableDimension' => 'ecs:service:DesiredCount', 'ServiceNamespace' => 'ecs', ], 'output' => [], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example deregisters a scalable target for an Amazon ECS service called web-app that is running in the default cluster.', 'id' => 'to-deregister-a-scalable-target-1470864164895', 'title' => 'To deregister a scalable target', ], ], 'DescribeScalableTargets' => [ [ 'input' => [ 'ServiceNamespace' => 'ecs', ], 'output' => [ 'ScalableTargets' => [ [ 'CreationTime' => '2016-05-06T11:21:46.199Z', 'MaxCapacity' => 10, 'MinCapacity' => 1, 'ResourceId' => 'service/default/web-app', 'RoleARN' => 'arn:aws:iam::012345678910:role/ApplicationAutoscalingECSRole', 'ScalableDimension' => 'ecs:service:DesiredCount', 'ServiceNamespace' => 'ecs', ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example describes the scalable targets for the ecs service namespace.', 'id' => 'to-describe-scalable-targets-1470864286961', 'title' => 'To describe scalable targets', ], ], 'DescribeScalingActivities' => [ [ 'input' => [ 'ResourceId' => 'service/default/web-app', 'ScalableDimension' => 'ecs:service:DesiredCount', 'ServiceNamespace' => 'ecs', ], 'output' => [ 'ScalingActivities' => [ [ 'ActivityId' => 'e6c5f7d1-dbbb-4a3f-89b2-51f33e766399', 'Cause' => 'monitor alarm web-app-cpu-lt-25 in state ALARM triggered policy web-app-cpu-lt-25', 'Description' => 'Setting desired count to 1.', 'EndTime' => '2016-05-06T16:04:32.111Z', 'ResourceId' => 'service/default/web-app', 'ScalableDimension' => 'ecs:service:DesiredCount', 'ServiceNamespace' => 'ecs', 'StartTime' => '2016-05-06T16:03:58.171Z', 'StatusCode' => 'Successful', 'StatusMessage' => 'Successfully set desired count to 1. Change successfully fulfilled by ecs.', ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example describes the scaling activities for an Amazon ECS service called web-app that is running in the default cluster.', 'id' => 'to-describe-scaling-activities-for-a-scalable-target-1470864398629', 'title' => 'To describe scaling activities for a scalable target', ], ], 'DescribeScalingPolicies' => [ [ 'input' => [ 'ServiceNamespace' => 'ecs', ], 'output' => [ 'NextToken' => '', 'ScalingPolicies' => [ [ 'Alarms' => [ [ 'AlarmARN' => 'arn:aws:cloudwatch:us-west-2:012345678910:alarm:web-app-cpu-gt-75', 'AlarmName' => 'web-app-cpu-gt-75', ], ], 'CreationTime' => '2016-05-06T12:11:39.230Z', 'PolicyARN' => 'arn:aws:autoscaling:us-west-2:012345678910:scalingPolicy:6d8972f3-efc8-437c-92d1-6270f29a66e7:resource/ecs/service/default/web-app:policyName/web-app-cpu-gt-75', 'PolicyName' => 'web-app-cpu-gt-75', 'PolicyType' => 'StepScaling', 'ResourceId' => 'service/default/web-app', 'ScalableDimension' => 'ecs:service:DesiredCount', 'ServiceNamespace' => 'ecs', 'StepScalingPolicyConfiguration' => [ 'AdjustmentType' => 'PercentChangeInCapacity', 'Cooldown' => 60, 'StepAdjustments' => [ [ 'MetricIntervalLowerBound' => 0, 'ScalingAdjustment' => 200, ], ], ], ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example describes the scaling policies for the ecs service namespace.', 'id' => 'to-describe-scaling-policies-1470864609734', 'title' => 'To describe scaling policies', ], ], 'PutScalingPolicy' => [ [ 'input' => [ 'PolicyName' => 'web-app-cpu-gt-75', 'PolicyType' => 'StepScaling', 'ResourceId' => 'service/default/web-app', 'ScalableDimension' => 'ecs:service:DesiredCount', 'ServiceNamespace' => 'ecs', 'StepScalingPolicyConfiguration' => [ 'AdjustmentType' => 'PercentChangeInCapacity', 'Cooldown' => 60, 'StepAdjustments' => [ [ 'MetricIntervalLowerBound' => 0, 'ScalingAdjustment' => 200, ], ], ], ], 'output' => [ 'PolicyARN' => 'arn:aws:autoscaling:us-west-2:012345678910:scalingPolicy:6d8972f3-efc8-437c-92d1-6270f29a66e7:resource/ecs/service/default/web-app:policyName/web-app-cpu-gt-75', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example applies a scaling policy to an Amazon ECS service called web-app in the default cluster. The policy increases the desired count of the service by 200%, with a cool down period of 60 seconds.', 'id' => 'to-apply-a-scaling-policy-to-an-amazon-ecs-service-1470864779862', 'title' => 'To apply a scaling policy to an Amazon ECS service', ], [ 'input' => [ 'PolicyName' => 'fleet-cpu-gt-75', 'PolicyType' => 'StepScaling', 'ResourceId' => 'spot-fleet-request/sfr-45e69d8a-be48-4539-bbf3-3464e99c50c3', 'ScalableDimension' => 'ec2:spot-fleet-request:TargetCapacity', 'ServiceNamespace' => 'ec2', 'StepScalingPolicyConfiguration' => [ 'AdjustmentType' => 'PercentChangeInCapacity', 'Cooldown' => 180, 'StepAdjustments' => [ [ 'MetricIntervalLowerBound' => 0, 'ScalingAdjustment' => 200, ], ], ], ], 'output' => [ 'PolicyARN' => 'arn:aws:autoscaling:us-east-1:012345678910:scalingPolicy:89406401-0cb7-4130-b770-d97cca0e446b:resource/ec2/spot-fleet-request/sfr-45e69d8a-be48-4539-bbf3-3464e99c50c3:policyName/fleet-cpu-gt-75', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example applies a scaling policy to an Amazon EC2 Spot fleet. The policy increases the target capacity of the spot fleet by 200%, with a cool down period of 180 seconds.", ', 'id' => 'to-apply-a-scaling-policy-to-an-amazon-ec2-spot-fleet-1472073278469', 'title' => 'To apply a scaling policy to an Amazon EC2 Spot fleet', ], ], 'RegisterScalableTarget' => [ [ 'input' => [ 'MaxCapacity' => 10, 'MinCapacity' => 1, 'ResourceId' => 'service/default/web-app', 'RoleARN' => 'arn:aws:iam::012345678910:role/ApplicationAutoscalingECSRole', 'ScalableDimension' => 'ecs:service:DesiredCount', 'ServiceNamespace' => 'ecs', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example registers a scalable target from an Amazon ECS service called web-app that is running on the default cluster, with a minimum desired count of 1 task and a maximum desired count of 10 tasks.', 'id' => 'to-register-a-new-scalable-target-1470864910380', 'title' => 'To register an ECS service as a scalable target', ], [ 'input' => [ 'MaxCapacity' => 10, 'MinCapacity' => 1, 'ResourceId' => 'spot-fleet-request/sfr-45e69d8a-be48-4539-bbf3-3464e99c50c3', 'RoleARN' => 'arn:aws:iam::012345678910:role/ApplicationAutoscalingSpotRole', 'ScalableDimension' => 'ec2:spot-fleet-request:TargetCapacity', 'ServiceNamespace' => 'ec2', ], 'output' => [], 'comments' => [], 'description' => 'This example registers a scalable target from an Amazon EC2 Spot fleet with a minimum target capacity of 1 and a maximum of 10.', 'id' => 'to-register-an-ec2-spot-fleet-as-a-scalable-target-1472072899649', 'title' => 'To register an EC2 Spot fleet as a scalable target', ], ], ],];
