<?php
// This file was auto-generated from sdk-root/src/data/eks/2017-11-01/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Amazon Elastic Kubernetes Service (Amazon EKS) is a managed service that makes it easy for you to run Kubernetes on AWS without needing to stand up or maintain your own Kubernetes control plane. Kubernetes is an open-source system for automating the deployment, scaling, and management of containerized applications. </p> <p>Amazon EKS runs up-to-date versions of the open-source Kubernetes software, so you can use all the existing plugins and tooling from the Kubernetes community. Applications running on Amazon EKS are fully compatible with applications running on any standard Kubernetes environment, whether running in on-premises data centers or public clouds. This means that you can easily migrate any standard Kubernetes application to Amazon EKS without any code modification required.</p>', 'operations' => [ 'CreateCluster' => '<p>Creates an Amazon EKS control plane. </p> <p>The Amazon EKS control plane consists of control plane instances that run the Kubernetes software, such as <code>etcd</code> and the API server. The control plane runs in an account managed by AWS, and the Kubernetes API is exposed via the Amazon EKS API server endpoint. Each Amazon EKS cluster control plane is single-tenant and unique and runs on its own set of Amazon EC2 instances.</p> <p>The cluster control plane is provisioned across multiple Availability Zones and fronted by an Elastic Load Balancing Network Load Balancer. Amazon EKS also provisions elastic network interfaces in your VPC subnets to provide connectivity from the control plane instances to the worker nodes (for example, to support <code>kubectl exec</code>, <code>logs</code>, and <code>proxy</code> data flows).</p> <p>Amazon EKS worker nodes run in your AWS account and connect to your cluster\'s control plane via the Kubernetes API server endpoint and a certificate file that is created for your cluster.</p> <p>You can use the <code>endpointPublicAccess</code> and <code>endpointPrivateAccess</code> parameters to enable or disable public and private access to your cluster\'s Kubernetes API server endpoint. By default, public access is enabled, and private access is disabled. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/cluster-endpoint.html">Amazon EKS Cluster Endpoint Access Control</a> in the <i> <i>Amazon EKS User Guide</i> </i>. </p> <p>You can use the <code>logging</code> parameter to enable or disable exporting the Kubernetes control plane logs for your cluster to CloudWatch Logs. By default, cluster control plane logs aren\'t exported to CloudWatch Logs. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/control-plane-logs.html">Amazon EKS Cluster Control Plane Logs</a> in the <i> <i>Amazon EKS User Guide</i> </i>.</p> <note> <p>CloudWatch Logs ingestion, archive storage, and data scanning rates apply to exported control plane logs. For more information, see <a href="http://aws.amazon.com/cloudwatch/pricing/">Amazon CloudWatch Pricing</a>.</p> </note> <p>Cluster creation typically takes between 10 and 15 minutes. After you create an Amazon EKS cluster, you must configure your Kubernetes tooling to communicate with the API server and launch worker nodes into your cluster. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/managing-auth.html">Managing Cluster Authentication</a> and <a href="https://docs.aws.amazon.com/eks/latest/userguide/launch-workers.html">Launching Amazon EKS Worker Nodes</a> in the <i>Amazon EKS User Guide</i>.</p>', 'DeleteCluster' => '<p>Deletes the Amazon EKS cluster control plane. </p> <note> <p>If you have active services in your cluster that are associated with a load balancer, you must delete those services before deleting the cluster so that the load balancers are deleted properly. Otherwise, you can have orphaned resources in your VPC that prevent you from being able to delete the VPC. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/delete-cluster.html">Deleting a Cluster</a> in the <i>Amazon EKS User Guide</i>.</p> </note>', 'DescribeCluster' => '<p>Returns descriptive information about an Amazon EKS cluster.</p> <p>The API server endpoint and certificate authority data returned by this operation are required for <code>kubelet</code> and <code>kubectl</code> to communicate with your Kubernetes API server. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/create-kubeconfig.html">Create a kubeconfig for Amazon EKS</a>.</p> <note> <p>The API server endpoint and certificate authority data aren\'t available until the cluster reaches the <code>ACTIVE</code> state.</p> </note>', 'DescribeUpdate' => '<p>Returns descriptive information about an update against your Amazon EKS cluster.</p> <p>When the status of the update is <code>Succeeded</code>, the update is complete. If an update fails, the status is <code>Failed</code>, and an error detail explains the reason for the failure.</p>', 'ListClusters' => '<p>Lists the Amazon EKS clusters in your AWS account in the specified Region.</p>', 'ListTagsForResource' => '<p>List the tags for an Amazon EKS resource.</p>', 'ListUpdates' => '<p>Lists the updates associated with an Amazon EKS cluster in your AWS account, in the specified Region.</p>', 'TagResource' => '<p>Associates the specified tags to a resource with the specified <code>resourceArn</code>. If existing tags on a resource are not specified in the request parameters, they are not changed. When a resource is deleted, the tags associated with that resource are deleted as well.</p>', 'UntagResource' => '<p>Deletes specified tags from a resource.</p>', 'UpdateClusterConfig' => '<p>Updates an Amazon EKS cluster configuration. Your cluster continues to function during the update. The response output includes an update ID that you can use to track the status of your cluster update with the <a>DescribeUpdate</a> API operation.</p> <p>You can use this API operation to enable or disable exporting the Kubernetes control plane logs for your cluster to CloudWatch Logs. By default, cluster control plane logs aren\'t exported to CloudWatch Logs. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/control-plane-logs.html">Amazon EKS Cluster Control Plane Logs</a> in the <i> <i>Amazon EKS User Guide</i> </i>.</p> <note> <p>CloudWatch Logs ingestion, archive storage, and data scanning rates apply to exported control plane logs. For more information, see <a href="http://aws.amazon.com/cloudwatch/pricing/">Amazon CloudWatch Pricing</a>.</p> </note> <p>You can also use this API operation to enable or disable public and private access to your cluster\'s Kubernetes API server endpoint. By default, public access is enabled, and private access is disabled. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/cluster-endpoint.html">Amazon EKS Cluster Endpoint Access Control</a> in the <i> <i>Amazon EKS User Guide</i> </i>. </p> <important> <p>At this time, you can not update the subnets or security group IDs for an existing cluster.</p> </important> <p>Cluster updates are asynchronous, and they should finish within a few minutes. During an update, the cluster status moves to <code>UPDATING</code> (this status transition is eventually consistent). When the update is complete (either <code>Failed</code> or <code>Successful</code>), the cluster status moves to <code>Active</code>.</p>', 'UpdateClusterVersion' => '<p>Updates an Amazon EKS cluster to the specified Kubernetes version. Your cluster continues to function during the update. The response output includes an update ID that you can use to track the status of your cluster update with the <a>DescribeUpdate</a> API operation.</p> <p>Cluster updates are asynchronous, and they should finish within a few minutes. During an update, the cluster status moves to <code>UPDATING</code> (this status transition is eventually consistent). When the update is complete (either <code>Failed</code> or <code>Successful</code>), the cluster status moves to <code>Active</code>.</p>', ], 'shapes' => [ 'BadRequestException' => [ 'base' => '<p>This exception is thrown if the request contains a semantic error. The precise meaning will depend on the API, and will be documented in the error message.</p>', 'refs' => [], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'VpcConfigResponse$endpointPublicAccess' => '<p>This parameter indicates whether the Amazon EKS public API server endpoint is enabled. If the Amazon EKS public API server endpoint is disabled, your cluster\'s Kubernetes API server can receive only requests that originate from within the cluster VPC. </p>', 'VpcConfigResponse$endpointPrivateAccess' => '<p>This parameter indicates whether the Amazon EKS private API server endpoint is enabled. If the Amazon EKS private API server endpoint is enabled, Kubernetes API requests that originate from within your cluster\'s VPC use the private VPC endpoint instead of traversing the internet.</p>', ], ], 'BoxedBoolean' => [ 'base' => NULL, 'refs' => [ 'LogSetup$enabled' => '<p>If a log type is enabled, that log type exports its control plane logs to CloudWatch Logs. If a log type isn\'t enabled, that log type doesn\'t export its control plane logs. Each individual log type can be enabled or disabled independently.</p>', 'VpcConfigRequest$endpointPublicAccess' => '<p>Set this value to <code>false</code> to disable public access for your cluster\'s Kubernetes API server endpoint. If you disable public access, your cluster\'s Kubernetes API server can receive only requests from within the cluster VPC. The default value for this parameter is <code>true</code>, which enables public access for your Kubernetes API server. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/cluster-endpoint.html">Amazon EKS Cluster Endpoint Access Control</a> in the <i> <i>Amazon EKS User Guide</i> </i>.</p>', 'VpcConfigRequest$endpointPrivateAccess' => '<p>Set this value to <code>true</code> to enable private access for your cluster\'s Kubernetes API server endpoint. If you enable private access, Kubernetes API requests from within your cluster\'s VPC use the private VPC endpoint. The default value for this parameter is <code>false</code>, which disables private access for your Kubernetes API server. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/cluster-endpoint.html">Amazon EKS Cluster Endpoint Access Control</a> in the <i> <i>Amazon EKS User Guide</i> </i>.</p>', ], ], 'Certificate' => [ 'base' => '<p>An object representing the <code>certificate-authority-data</code> for your cluster.</p>', 'refs' => [ 'Cluster$certificateAuthority' => '<p>The <code>certificate-authority-data</code> for your cluster.</p>', ], ], 'ClientException' => [ 'base' => '<p>These errors are usually caused by a client action. Actions can include using an action or resource on behalf of a user that doesn\'t have permissions to use the action or resource or specifying an identifier that is not valid.</p>', 'refs' => [], ], 'Cluster' => [ 'base' => '<p>An object representing an Amazon EKS cluster.</p>', 'refs' => [ 'CreateClusterResponse$cluster' => '<p>The full description of your new cluster.</p>', 'DeleteClusterResponse$cluster' => '<p>The full description of the cluster to delete.</p>', 'DescribeClusterResponse$cluster' => '<p>The full description of your specified cluster.</p>', ], ], 'ClusterName' => [ 'base' => NULL, 'refs' => [ 'CreateClusterRequest$name' => '<p>The unique name to give to your cluster.</p>', ], ], 'ClusterStatus' => [ 'base' => NULL, 'refs' => [ 'Cluster$status' => '<p>The current status of the cluster.</p>', ], ], 'CreateClusterRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateClusterResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteClusterRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteClusterResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeClusterRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeClusterResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeUpdateRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeUpdateResponse' => [ 'base' => NULL, 'refs' => [], ], 'ErrorCode' => [ 'base' => NULL, 'refs' => [ 'ErrorDetail$errorCode' => '<p>A brief description of the error. </p> <ul> <li> <p> <b>SubnetNotFound</b>: We couldn\'t find one of the subnets associated with the cluster.</p> </li> <li> <p> <b>SecurityGroupNotFound</b>: We couldn\'t find one of the security groups associated with the cluster.</p> </li> <li> <p> <b>EniLimitReached</b>: You have reached the elastic network interface limit for your account.</p> </li> <li> <p> <b>IpNotAvailable</b>: A subnet associated with the cluster doesn\'t have any free IP addresses.</p> </li> <li> <p> <b>AccessDenied</b>: You don\'t have permissions to perform the specified operation.</p> </li> <li> <p> <b>OperationNotPermitted</b>: The service role associated with the cluster doesn\'t have the required access permissions for Amazon EKS.</p> </li> <li> <p> <b>VpcIdNotFound</b>: We couldn\'t find the VPC associated with the cluster.</p> </li> </ul>', ], ], 'ErrorDetail' => [ 'base' => '<p>An object representing an error when an asynchronous operation fails.</p>', 'refs' => [ 'ErrorDetails$member' => NULL, ], ], 'ErrorDetails' => [ 'base' => NULL, 'refs' => [ 'Update$errors' => '<p>Any errors associated with a <code>Failed</code> update.</p>', ], ], 'Identity' => [ 'base' => '<p>An object representing an identity provider for authentication credentials.</p>', 'refs' => [ 'Cluster$identity' => '<p>The identity provider information for the cluster.</p>', ], ], 'InvalidParameterException' => [ 'base' => '<p>The specified parameter is invalid. Review the available parameters for the API request.</p>', 'refs' => [], ], 'InvalidRequestException' => [ 'base' => '<p>The request is invalid given the state of the cluster. Check the state of the cluster and the associated operations.</p>', 'refs' => [], ], 'ListClustersRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListClustersRequestMaxResults' => [ 'base' => NULL, 'refs' => [ 'ListClustersRequest$maxResults' => '<p>The maximum number of cluster results returned by <code>ListClusters</code> in paginated output. When you use this parameter, <code>ListClusters</code> returns only <code>maxResults</code> results in a single page along with a <code>nextToken</code> response element. You can see the remaining results of the initial request by sending another <code>ListClusters</code> request with the returned <code>nextToken</code> value. This value can be between 1 and 100. If you don\'t use this parameter, <code>ListClusters</code> returns up to 100 results and a <code>nextToken</code> value if applicable.</p>', ], ], 'ListClustersResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListUpdatesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListUpdatesRequestMaxResults' => [ 'base' => NULL, 'refs' => [ 'ListUpdatesRequest$maxResults' => '<p>The maximum number of update results returned by <code>ListUpdates</code> in paginated output. When you use this parameter, <code>ListUpdates</code> returns only <code>maxResults</code> results in a single page along with a <code>nextToken</code> response element. You can see the remaining results of the initial request by sending another <code>ListUpdates</code> request with the returned <code>nextToken</code> value. This value can be between 1 and 100. If you don\'t use this parameter, <code>ListUpdates</code> returns up to 100 results and a <code>nextToken</code> value if applicable.</p>', ], ], 'ListUpdatesResponse' => [ 'base' => NULL, 'refs' => [], ], 'LogSetup' => [ 'base' => '<p>An object representing the enabled or disabled Kubernetes control plane logs for your cluster.</p>', 'refs' => [ 'LogSetups$member' => NULL, ], ], 'LogSetups' => [ 'base' => NULL, 'refs' => [ 'Logging$clusterLogging' => '<p>The cluster control plane logging configuration for your cluster.</p>', ], ], 'LogType' => [ 'base' => NULL, 'refs' => [ 'LogTypes$member' => NULL, ], ], 'LogTypes' => [ 'base' => NULL, 'refs' => [ 'LogSetup$types' => '<p>The available cluster control plane log types.</p>', ], ], 'Logging' => [ 'base' => '<p>An object representing the logging configuration for resources in your cluster.</p>', 'refs' => [ 'Cluster$logging' => '<p>The logging configuration for your cluster.</p>', 'CreateClusterRequest$logging' => '<p>Enable or disable exporting the Kubernetes control plane logs for your cluster to CloudWatch Logs. By default, cluster control plane logs aren\'t exported to CloudWatch Logs. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/control-plane-logs.html">Amazon EKS Cluster Control Plane Logs</a> in the <i> <i>Amazon EKS User Guide</i> </i>.</p> <note> <p>CloudWatch Logs ingestion, archive storage, and data scanning rates apply to exported control plane logs. For more information, see <a href="http://aws.amazon.com/cloudwatch/pricing/">Amazon CloudWatch Pricing</a>.</p> </note>', 'UpdateClusterConfigRequest$logging' => '<p>Enable or disable exporting the Kubernetes control plane logs for your cluster to CloudWatch Logs. By default, cluster control plane logs aren\'t exported to CloudWatch Logs. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/control-plane-logs.html">Amazon EKS Cluster Control Plane Logs</a> in the <i> <i>Amazon EKS User Guide</i> </i>.</p> <note> <p>CloudWatch Logs ingestion, archive storage, and data scanning rates apply to exported control plane logs. For more information, see <a href="http://aws.amazon.com/cloudwatch/pricing/">Amazon CloudWatch Pricing</a>.</p> </note>', ], ], 'NotFoundException' => [ 'base' => '<p>A service resource associated with the request could not be found. Clients should not retry such requests.</p>', 'refs' => [], ], 'OIDC' => [ 'base' => '<p>An object representing the <a href="https://openid.net/connect/">OpenID Connect</a> identity provider information for the cluster.</p>', 'refs' => [ 'Identity$oidc' => '<p>The <a href="https://openid.net/connect/">OpenID Connect</a> identity provider information for the cluster.</p>', ], ], 'ResourceInUseException' => [ 'base' => '<p>The specified resource is in use.</p>', 'refs' => [], ], 'ResourceLimitExceededException' => [ 'base' => '<p>You have encountered a service limit on the specified resource.</p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource could not be found. You can view your available clusters with <a>ListClusters</a>. Amazon EKS clusters are Region-specific.</p>', 'refs' => [], ], 'ServerException' => [ 'base' => '<p>These errors are usually caused by a server-side issue.</p>', 'refs' => [], ], 'ServiceUnavailableException' => [ 'base' => '<p>The service is unavailable. Back off and retry the operation.</p>', 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'BadRequestException$message' => NULL, 'Certificate$data' => '<p>The Base64-encoded certificate data required to communicate with your cluster. Add this to the <code>certificate-authority-data</code> section of the <code>kubeconfig</code> file for your cluster.</p>', 'ClientException$clusterName' => '<p>The Amazon EKS cluster associated with the exception.</p>', 'ClientException$message' => NULL, 'Cluster$name' => '<p>The name of the cluster.</p>', 'Cluster$arn' => '<p>The Amazon Resource Name (ARN) of the cluster.</p>', 'Cluster$version' => '<p>The Kubernetes server version for the cluster.</p>', 'Cluster$endpoint' => '<p>The endpoint for your Kubernetes API server.</p>', 'Cluster$roleArn' => '<p>The Amazon Resource Name (ARN) of the IAM role that provides permissions for the Kubernetes control plane to make calls to AWS API operations on your behalf.</p>', 'Cluster$clientRequestToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'Cluster$platformVersion' => '<p>The platform version of your Amazon EKS cluster. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/platform-versions.html">Platform Versions</a> in the <i> <i>Amazon EKS User Guide</i> </i>.</p>', 'CreateClusterRequest$version' => '<p>The desired Kubernetes version for your cluster. If you don\'t specify a value here, the latest version available in Amazon EKS is used.</p>', 'CreateClusterRequest$roleArn' => '<p>The Amazon Resource Name (ARN) of the IAM role that provides permissions for Amazon EKS to make calls to other AWS API operations on your behalf. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/service_IAM_role.html">Amazon EKS Service IAM Role</a> in the <i> <i>Amazon EKS User Guide</i> </i>.</p>', 'CreateClusterRequest$clientRequestToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'DeleteClusterRequest$name' => '<p>The name of the cluster to delete.</p>', 'DescribeClusterRequest$name' => '<p>The name of the cluster to describe.</p>', 'DescribeUpdateRequest$name' => '<p>The name of the Amazon EKS cluster to update.</p>', 'DescribeUpdateRequest$updateId' => '<p>The ID of the update to describe.</p>', 'ErrorDetail$errorMessage' => '<p>A more complete description of the error.</p>', 'InvalidParameterException$clusterName' => '<p>The Amazon EKS cluster associated with the exception.</p>', 'InvalidParameterException$message' => NULL, 'InvalidRequestException$clusterName' => '<p>The Amazon EKS cluster associated with the exception.</p>', 'InvalidRequestException$message' => NULL, 'ListClustersRequest$nextToken' => '<p>The <code>nextToken</code> value returned from a previous paginated <code>ListClusters</code> request where <code>maxResults</code> was used and the results exceeded the value of that parameter. Pagination continues from the end of the previous results that returned the <code>nextToken</code> value.</p> <note> <p>This token should be treated as an opaque identifier that is used only to retrieve the next items in a list and not for other programmatic purposes.</p> </note>', 'ListClustersResponse$nextToken' => '<p>The <code>nextToken</code> value to include in a future <code>ListClusters</code> request. When the results of a <code>ListClusters</code> request exceed <code>maxResults</code>, you can use this value to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'ListTagsForResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) that identifies the resource for which to list the tags. Currently, the supported resources are Amazon EKS clusters.</p>', 'ListUpdatesRequest$name' => '<p>The name of the Amazon EKS cluster to list updates for.</p>', 'ListUpdatesRequest$nextToken' => '<p>The <code>nextToken</code> value returned from a previous paginated <code>ListUpdates</code> request where <code>maxResults</code> was used and the results exceeded the value of that parameter. Pagination continues from the end of the previous results that returned the <code>nextToken</code> value.</p>', 'ListUpdatesResponse$nextToken' => '<p>The <code>nextToken</code> value to include in a future <code>ListUpdates</code> request. When the results of a <code>ListUpdates</code> request exceed <code>maxResults</code>, you can use this value to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'NotFoundException$message' => NULL, 'OIDC$issuer' => '<p>The issuer URL for the OpenID Connect identity provider.</p>', 'ResourceInUseException$clusterName' => '<p>The Amazon EKS cluster associated with the exception.</p>', 'ResourceInUseException$message' => NULL, 'ResourceLimitExceededException$clusterName' => '<p>The Amazon EKS cluster associated with the exception.</p>', 'ResourceLimitExceededException$message' => NULL, 'ResourceNotFoundException$clusterName' => '<p>The Amazon EKS cluster associated with the exception.</p>', 'ResourceNotFoundException$message' => NULL, 'ServerException$clusterName' => '<p>The Amazon EKS cluster associated with the exception.</p>', 'ServerException$message' => NULL, 'ServiceUnavailableException$message' => NULL, 'StringList$member' => NULL, 'TagResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the resource to which to add tags. Currently, the supported resources are Amazon EKS clusters.</p>', 'UnsupportedAvailabilityZoneException$message' => NULL, 'UnsupportedAvailabilityZoneException$clusterName' => '<p>The Amazon EKS cluster associated with the exception.</p>', 'UntagResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the resource from which to delete tags. Currently, the supported resources are Amazon EKS clusters.</p>', 'Update$id' => '<p>A UUID that is used to track the update.</p>', 'UpdateClusterConfigRequest$name' => '<p>The name of the Amazon EKS cluster to update.</p>', 'UpdateClusterConfigRequest$clientRequestToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'UpdateClusterVersionRequest$name' => '<p>The name of the Amazon EKS cluster to update.</p>', 'UpdateClusterVersionRequest$version' => '<p>The desired Kubernetes version following a successful update.</p>', 'UpdateClusterVersionRequest$clientRequestToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'UpdateParam$value' => '<p>The value of the keys submitted as part of an update request.</p>', 'VpcConfigResponse$vpcId' => '<p>The VPC associated with your cluster.</p>', ], ], 'StringList' => [ 'base' => NULL, 'refs' => [ 'ErrorDetail$resourceIds' => '<p>An optional field that contains the resource IDs associated with the error.</p>', 'ListClustersResponse$clusters' => '<p>A list of all of the clusters for your account in the specified Region.</p>', 'ListUpdatesResponse$updateIds' => '<p>A list of all the updates for the specified cluster and Region.</p>', 'UnsupportedAvailabilityZoneException$validZones' => '<p>The supported Availability Zones for your account. Choose subnets in these Availability Zones for your cluster.</p>', 'VpcConfigRequest$subnetIds' => '<p>Specify subnets for your Amazon EKS worker nodes. Amazon EKS creates cross-account elastic network interfaces in these subnets to allow communication between your worker nodes and the Kubernetes control plane.</p>', 'VpcConfigRequest$securityGroupIds' => '<p>Specify one or more security groups for the cross-account elastic network interfaces that Amazon EKS creates to use to allow communication between your worker nodes and the Kubernetes control plane. If you don\'t specify a security group, the default security group for your VPC is used.</p>', 'VpcConfigResponse$subnetIds' => '<p>The subnets associated with your cluster.</p>', 'VpcConfigResponse$securityGroupIds' => '<p>The security groups associated with the cross-account elastic network interfaces that are used to allow communication between your worker nodes and the Kubernetes control plane.</p>', ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeyList$member' => NULL, 'TagMap$key' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$tagKeys' => '<p>The keys of the tags to be removed.</p>', ], ], 'TagMap' => [ 'base' => NULL, 'refs' => [ 'Cluster$tags' => '<p>The metadata that you apply to the cluster to assist with categorization and organization. Each tag consists of a key and an optional value, both of which you define.</p>', 'CreateClusterRequest$tags' => '<p>The metadata to apply to the cluster to assist with categorization and organization. Each tag consists of a key and an optional value, both of which you define.</p>', 'ListTagsForResourceResponse$tags' => '<p>The tags for the resource.</p>', 'TagResourceRequest$tags' => '<p>The tags to add to the resource. A tag is an array of key-value pairs.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'TagMap$value' => NULL, ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'Cluster$createdAt' => '<p>The Unix epoch timestamp in seconds for when the cluster was created.</p>', 'Update$createdAt' => '<p>The Unix epoch timestamp in seconds for when the update was created.</p>', ], ], 'UnsupportedAvailabilityZoneException' => [ 'base' => '<p>At least one of your specified cluster subnets is in an Availability Zone that does not support Amazon EKS. The exception output specifies the supported Availability Zones for your account, from which you can choose subnets for your cluster.</p>', 'refs' => [], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'Update' => [ 'base' => '<p>An object representing an asynchronous update.</p>', 'refs' => [ 'DescribeUpdateResponse$update' => '<p>The full description of the specified update.</p>', 'UpdateClusterConfigResponse$update' => NULL, 'UpdateClusterVersionResponse$update' => '<p>The full description of the specified update</p>', ], ], 'UpdateClusterConfigRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateClusterConfigResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateClusterVersionRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateClusterVersionResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateParam' => [ 'base' => '<p>An object representing the details of an update request.</p>', 'refs' => [ 'UpdateParams$member' => NULL, ], ], 'UpdateParamType' => [ 'base' => NULL, 'refs' => [ 'UpdateParam$type' => '<p>The keys associated with an update request.</p>', ], ], 'UpdateParams' => [ 'base' => NULL, 'refs' => [ 'Update$params' => '<p>A key-value map that contains the parameters associated with the update.</p>', ], ], 'UpdateStatus' => [ 'base' => NULL, 'refs' => [ 'Update$status' => '<p>The current status of the update.</p>', ], ], 'UpdateType' => [ 'base' => NULL, 'refs' => [ 'Update$type' => '<p>The type of the update.</p>', ], ], 'VpcConfigRequest' => [ 'base' => '<p>An object representing the VPC configuration to use for an Amazon EKS cluster.</p>', 'refs' => [ 'CreateClusterRequest$resourcesVpcConfig' => '<p>The VPC configuration used by the cluster control plane. Amazon EKS VPC resources have specific requirements to work properly with Kubernetes. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/network_reqs.html">Cluster VPC Considerations</a> and <a href="https://docs.aws.amazon.com/eks/latest/userguide/sec-group-reqs.html">Cluster Security Group Considerations</a> in the <i>Amazon EKS User Guide</i>. You must specify at least two subnets. You can specify up to five security groups, but we recommend that you use a dedicated security group for your cluster control plane.</p>', 'UpdateClusterConfigRequest$resourcesVpcConfig' => NULL, ], ], 'VpcConfigResponse' => [ 'base' => '<p>An object representing an Amazon EKS cluster VPC configuration response.</p>', 'refs' => [ 'Cluster$resourcesVpcConfig' => '<p>The VPC configuration used by the cluster control plane. Amazon EKS VPC resources have specific requirements to work properly with Kubernetes. For more information, see <a href="https://docs.aws.amazon.com/eks/latest/userguide/network_reqs.html">Cluster VPC Considerations</a> and <a href="https://docs.aws.amazon.com/eks/latest/userguide/sec-group-reqs.html">Cluster Security Group Considerations</a> in the <i>Amazon EKS User Guide</i>.</p>', ], ], ],];
