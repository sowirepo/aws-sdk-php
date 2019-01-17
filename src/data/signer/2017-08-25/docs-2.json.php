<?php
// This file was auto-generated from sdk-root/src/data/signer/2017-08-25/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>You can use Code Signing for Amazon FreeRTOS (AWS Signer) to sign code that you created for any of the IoT devices that Amazon Web Services supports. AWS Signer is integrated with Amazon FreeRTOS, AWS Certificate Manager, and AWS CloudTrail. Amazon FreeRTOS customers can use AWS Signer to sign code images before making them available for microcontrollers. You can use ACM to import third-party certificates to be used by AWS Signer. For general information about using AWS Signer, see the <a href="http://docs.aws.amazon.com/signer/latest/developerguide/Welcome.html">Code Signing for Amazon FreeRTOS Developer Guide</a>.</p>', 'operations' => [ 'CancelSigningProfile' => '<p>Changes the state of an <code>ACTIVE</code> signing profile to <code>CANCELED</code>. A canceled profile is still viewable with the <code>ListSigningProfiles</code> operation, but it cannot perform new signing jobs, and is deleted two years after cancelation.</p>', 'DescribeSigningJob' => '<p>Returns information about a specific code signing job. You specify the job by using the <code>jobId</code> value that is returned by the <a>StartSigningJob</a> operation. </p>', 'GetSigningPlatform' => '<p>Returns information on a specific signing platform.</p>', 'GetSigningProfile' => '<p>Returns information on a specific signing profile.</p>', 'ListSigningJobs' => '<p>Lists all your signing jobs. You can use the <code>maxResults</code> parameter to limit the number of signing jobs that are returned in the response. If additional jobs remain to be listed, AWS Signer returns a <code>nextToken</code> value. Use this value in subsequent calls to <code>ListSigningJobs</code> to fetch the remaining values. You can continue calling <code>ListSigningJobs</code> with your <code>maxResults</code> parameter and with new values that AWS Signer returns in the <code>nextToken</code> parameter until all of your signing jobs have been returned. </p>', 'ListSigningPlatforms' => '<p>Lists all signing platforms available in AWS Signer that match the request parameters. If additional jobs remain to be listed, AWS Signer returns a <code>nextToken</code> value. Use this value in subsequent calls to <code>ListSigningJobs</code> to fetch the remaining values. You can continue calling <code>ListSigningJobs</code> with your <code>maxResults</code> parameter and with new values that AWS Signer returns in the <code>nextToken</code> parameter until all of your signing jobs have been returned.</p>', 'ListSigningProfiles' => '<p>Lists all available signing profiles in your AWS account. Returns only profiles with an <code>ACTIVE</code> status unless the <code>includeCanceled</code> request field is set to <code>true</code>. If additional jobs remain to be listed, AWS Signer returns a <code>nextToken</code> value. Use this value in subsequent calls to <code>ListSigningJobs</code> to fetch the remaining values. You can continue calling <code>ListSigningJobs</code> with your <code>maxResults</code> parameter and with new values that AWS Signer returns in the <code>nextToken</code> parameter until all of your signing jobs have been returned.</p>', 'PutSigningProfile' => '<p>Creates a signing profile. A signing profile is an AWS Signer template that can be used to carry out a pre-defined signing job. For more information, see <a href="http://docs.aws.amazon.com/signer/latest/developerguide/gs-profile.html">http://docs.aws.amazon.com/signer/latest/developerguide/gs-profile.html</a> </p>', 'StartSigningJob' => '<p>Initiates a signing job to be performed on the code provided. Signing jobs are viewable by the <code>ListSigningJobs</code> operation for two years after they are performed. Note the following requirements: </p> <ul> <li> <p> You must create an Amazon S3 source bucket. For more information, see <a href="http://docs.aws.amazon.com/AmazonS3/latest/gsg/CreatingABucket.html">Create a Bucket</a> in the <i>Amazon S3 Getting Started Guide</i>. </p> </li> <li> <p>Your S3 source bucket must be version enabled.</p> </li> <li> <p>You must create an S3 destination bucket. AWS Signer uses your S3 destination bucket to write your signed code.</p> </li> <li> <p>You specify the name of the source and destination buckets when calling the <code>StartSigningJob</code> operation.</p> </li> <li> <p>You must also specify a request token that identifies your request to AWS Signer. </p> </li> </ul> <p>You can call the <a>DescribeSigningJob</a> and the <a>ListSigningJobs</a> actions after you call <code>StartSigningJob</code>.</p> <p>For a Java example that shows how to use this action, see <a href="http://docs.aws.amazon.com/acm/latest/userguide/">http://docs.aws.amazon.com/acm/latest/userguide/</a> </p>', ], 'shapes' => [ 'key' => [ 'base' => NULL, 'refs' => [ 'S3SignedObject$key' => '<p>Key name that uniquely identifies a signed code image in your bucket.</p>', ], ], 'AccessDeniedException' => [ 'base' => '<p>You do not have sufficient access to perform this action.</p>', 'refs' => [], ], 'BucketName' => [ 'base' => NULL, 'refs' => [ 'S3Destination$bucketName' => '<p>Name of the S3 bucket.</p>', 'S3SignedObject$bucketName' => '<p>Name of the S3 bucket.</p>', 'S3Source$bucketName' => '<p>Name of the S3 bucket.</p>', ], ], 'CancelSigningProfileRequest' => [ 'base' => NULL, 'refs' => [], ], 'Category' => [ 'base' => NULL, 'refs' => [ 'GetSigningPlatformResponse$category' => '<p>The category type of the target signing platform.</p>', 'SigningPlatform$category' => '<p>The category of an AWS Signer platform.</p>', ], ], 'CertificateArn' => [ 'base' => NULL, 'refs' => [ 'SigningMaterial$certificateArn' => '<p>The Amazon Resource Name (ARN) of the certificates that is used to sign your code.</p>', ], ], 'ClientRequestToken' => [ 'base' => NULL, 'refs' => [ 'StartSigningJobRequest$clientRequestToken' => '<p>String that identifies the signing request. All calls after the first that use this token return the same response as the first call.</p>', ], ], 'CompletedAt' => [ 'base' => NULL, 'refs' => [ 'DescribeSigningJobResponse$completedAt' => '<p>Date and time that the signing job was completed.</p>', ], ], 'CreatedAt' => [ 'base' => NULL, 'refs' => [ 'DescribeSigningJobResponse$createdAt' => '<p>Date and time that the signing job was created.</p>', 'SigningJob$createdAt' => '<p>The date and time that the signing job was created.</p>', ], ], 'DescribeSigningJobRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeSigningJobResponse' => [ 'base' => NULL, 'refs' => [], ], 'Destination' => [ 'base' => '<p>Points to an <code>S3Destination</code> object that contains information about your S3 bucket.</p>', 'refs' => [ 'StartSigningJobRequest$destination' => '<p>The S3 bucket in which to save your signed object. The destination contains the name of your bucket and an optional prefix.</p>', ], ], 'DisplayName' => [ 'base' => NULL, 'refs' => [ 'GetSigningPlatformResponse$displayName' => '<p>The display name of the target signing platform.</p>', ], ], 'EncryptionAlgorithm' => [ 'base' => NULL, 'refs' => [ 'EncryptionAlgorithmOptions$defaultValue' => '<p>The default encryption algorithm that is used by an AWS Signer job.</p>', 'EncryptionAlgorithms$member' => NULL, 'SigningConfigurationOverrides$encryptionAlgorithm' => '<p>A specified override of the default encryption algorithm that is used in an AWS Signer job.</p>', ], ], 'EncryptionAlgorithmOptions' => [ 'base' => '<p>The encryption algorithm options that are available to an AWS Signer job.</p>', 'refs' => [ 'SigningConfiguration$encryptionAlgorithmOptions' => '<p>The encryption algorithm options that are available for an AWS Signer job.</p>', ], ], 'EncryptionAlgorithms' => [ 'base' => NULL, 'refs' => [ 'EncryptionAlgorithmOptions$allowedValues' => '<p>The set of accepted encryption algorithms that are allowed in an AWS Signer job.</p>', ], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$message' => NULL, 'InternalServiceErrorException$message' => NULL, 'ResourceNotFoundException$message' => NULL, 'ThrottlingException$message' => NULL, 'ValidationException$message' => NULL, ], ], 'GetSigningPlatformRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetSigningPlatformResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetSigningProfileRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetSigningProfileResponse' => [ 'base' => NULL, 'refs' => [], ], 'HashAlgorithm' => [ 'base' => NULL, 'refs' => [ 'HashAlgorithmOptions$defaultValue' => '<p>The default hash algorithm that is used in an AWS Signer job.</p>', 'HashAlgorithms$member' => NULL, 'SigningConfigurationOverrides$hashAlgorithm' => '<p>A specified override of the default hash algorithm that is used in an AWS Signer job.</p>', ], ], 'HashAlgorithmOptions' => [ 'base' => '<p>The hash algorithms that are available to an AWS Signer job.</p>', 'refs' => [ 'SigningConfiguration$hashAlgorithmOptions' => '<p>The hash algorithm options that are available for an AWS Signer job.</p>', ], ], 'HashAlgorithms' => [ 'base' => NULL, 'refs' => [ 'HashAlgorithmOptions$allowedValues' => '<p>The set of accepted hash algorithms allowed in an AWS Signer job.</p>', ], ], 'ImageFormat' => [ 'base' => NULL, 'refs' => [ 'ImageFormats$member' => NULL, 'SigningImageFormat$defaultFormat' => '<p>The default format of an AWS Signer signing image.</p>', ], ], 'ImageFormats' => [ 'base' => NULL, 'refs' => [ 'SigningImageFormat$supportedFormats' => '<p>The supported formats of an AWS Signer signing image.</p>', ], ], 'InternalServiceErrorException' => [ 'base' => '<p>An internal error occurred.</p>', 'refs' => [], ], 'JobId' => [ 'base' => NULL, 'refs' => [ 'DescribeSigningJobRequest$jobId' => '<p>The ID of the signing job on input.</p>', 'DescribeSigningJobResponse$jobId' => '<p>The ID of the signing job on output.</p>', 'SigningJob$jobId' => '<p>The ID of the signing job.</p>', 'StartSigningJobResponse$jobId' => '<p>The ID of your signing job.</p>', ], ], 'Key' => [ 'base' => NULL, 'refs' => [ 'S3Source$key' => '<p>Key name of the bucket object that contains your unsigned code.</p>', ], ], 'ListSigningJobsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListSigningJobsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListSigningPlatformsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListSigningPlatformsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListSigningProfilesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListSigningProfilesResponse' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListSigningJobsRequest$maxResults' => '<p>Specifies the maximum number of items to return in the response. Use this parameter when paginating results. If additional items exist beyond the number you specify, the <code>nextToken</code> element is set in the response. Use the <code>nextToken</code> value in a subsequent request to retrieve additional items. </p>', 'ListSigningPlatformsRequest$maxResults' => '<p>The maximum number of results to be returned by this operation.</p>', 'ListSigningProfilesRequest$maxResults' => '<p>The maximum number of profiles to be returned.</p>', ], ], 'MaxSizeInMB' => [ 'base' => NULL, 'refs' => [ 'GetSigningPlatformResponse$maxSizeInMB' => '<p>The maximum size (in MB) of the payload that can be signed by the target platform.</p>', 'SigningPlatform$maxSizeInMB' => '<p>The maximum size (in MB) of code that can be signed by a AWS Signer platform.</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListSigningJobsRequest$nextToken' => '<p>String for specifying the next set of paginated results to return. After you receive a response with truncated results, use this parameter in a subsequent request. Set it to the value of <code>nextToken</code> from the response that you just received.</p>', 'ListSigningJobsResponse$nextToken' => '<p>String for specifying the next set of paginated results.</p>', 'ListSigningProfilesRequest$nextToken' => '<p>Value for specifying the next set of paginated results to return. After you receive a response with truncated results, use this parameter in a subsequent request. Set it to the value of <code>nextToken</code> from the response that you just received.</p>', 'ListSigningProfilesResponse$nextToken' => '<p>Value for specifying the next set of paginated results to return.</p>', ], ], 'PlatformId' => [ 'base' => NULL, 'refs' => [ 'DescribeSigningJobResponse$platformId' => '<p>The microcontroller platform to which your signed code image will be distributed.</p>', 'GetSigningPlatformRequest$platformId' => '<p>The ID of the target signing platform.</p>', 'GetSigningPlatformResponse$platformId' => '<p>The ID of the target signing platform.</p>', 'GetSigningProfileResponse$platformId' => '<p>The ID of the platform that is used by the target signing profile.</p>', 'ListSigningJobsRequest$platformId' => '<p>The ID of microcontroller platform that you specified for the distribution of your code image.</p>', 'PutSigningProfileRequest$platformId' => '<p>The ID of the signing profile to be created.</p>', 'SigningProfile$platformId' => '<p>The ID of a platform that is available for use by a signing profile.</p>', ], ], 'Prefix' => [ 'base' => NULL, 'refs' => [ 'S3Destination$prefix' => '<p>An Amazon S3 prefix that you can use to limit responses to those that begin with the specified prefix.</p>', ], ], 'ProfileName' => [ 'base' => NULL, 'refs' => [ 'CancelSigningProfileRequest$profileName' => '<p>The name of the signing profile to be canceled.</p>', 'DescribeSigningJobResponse$profileName' => '<p>The name of the profile that initiated the signing operation.</p>', 'GetSigningProfileRequest$profileName' => '<p>The name of the target signing profile.</p>', 'GetSigningProfileResponse$profileName' => '<p>The name of the target signing profile.</p>', 'PutSigningProfileRequest$profileName' => '<p>The name of the signing profile to be created.</p>', 'SigningProfile$profileName' => '<p>The name of the AWS Signer profile.</p>', 'StartSigningJobRequest$profileName' => '<p>The name of the signing profile.</p>', ], ], 'PutSigningProfileRequest' => [ 'base' => NULL, 'refs' => [], ], 'PutSigningProfileResponse' => [ 'base' => NULL, 'refs' => [], ], 'RequestedBy' => [ 'base' => NULL, 'refs' => [ 'DescribeSigningJobResponse$requestedBy' => '<p>The IAM principal that requested the signing job.</p>', 'ListSigningJobsRequest$requestedBy' => '<p>The IAM principal that requested the signing job.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>A specified resource could not be found.</p>', 'refs' => [], ], 'S3Destination' => [ 'base' => '<p>The name and prefix of the S3 bucket where AWS Signer saves your signed objects.</p>', 'refs' => [ 'Destination$s3' => '<p>The <code>S3Destination</code> object.</p>', ], ], 'S3SignedObject' => [ 'base' => '<p>The S3 bucket name and key where AWS Signer saved your signed code image.</p>', 'refs' => [ 'SignedObject$s3' => '<p>The <code>S3SignedObject</code>.</p>', ], ], 'S3Source' => [ 'base' => '<p>Information about the S3 bucket where you saved your unsigned code.</p>', 'refs' => [ 'Source$s3' => '<p>The <code>S3Source</code> object.</p>', ], ], 'SignedObject' => [ 'base' => '<p>Points to an <code>S3SignedObject</code> object that contains information about your signed code image.</p>', 'refs' => [ 'DescribeSigningJobResponse$signedObject' => '<p>Name of the S3 bucket where the signed code image is saved by AWS Signer.</p>', 'SigningJob$signedObject' => '<p>A <code>SignedObject</code> structure that contains information about a signing job\'s signed code image.</p>', ], ], 'SigningConfiguration' => [ 'base' => '<p>The configuration of an AWS Signer operation.</p>', 'refs' => [ 'GetSigningPlatformResponse$signingConfiguration' => '<p>A list of configurations applied to the target platform at signing.</p>', 'SigningPlatform$signingConfiguration' => '<p>The configuration of an AWS Signer platform. This includes the designated hash algorithm and encryption algorithm of a signing platform.</p>', ], ], 'SigningConfigurationOverrides' => [ 'base' => '<p>A signing configuration that overrides the default encryption or hash algorithm of a signing job.</p>', 'refs' => [ 'SigningPlatformOverrides$signingConfiguration' => NULL, ], ], 'SigningImageFormat' => [ 'base' => '<p>The image format of an AWS Signer platform or profile.</p>', 'refs' => [ 'GetSigningPlatformResponse$signingImageFormat' => '<p>The format of the target platform\'s signing image.</p>', 'SigningPlatform$signingImageFormat' => '<p>The signing image format that is used by an AWS Signer platform.</p>', ], ], 'SigningJob' => [ 'base' => '<p>Contains information about a signing job.</p>', 'refs' => [ 'SigningJobs$member' => NULL, ], ], 'SigningJobs' => [ 'base' => NULL, 'refs' => [ 'ListSigningJobsResponse$jobs' => '<p>A list of your signing jobs.</p>', ], ], 'SigningMaterial' => [ 'base' => '<p>The ACM certificate that is used to sign your code.</p>', 'refs' => [ 'DescribeSigningJobResponse$signingMaterial' => '<p>Amazon Resource Name (ARN) of your code signing certificate.</p>', 'GetSigningProfileResponse$signingMaterial' => '<p>The ARN of the certificate that the target profile uses for signing operations.</p>', 'PutSigningProfileRequest$signingMaterial' => '<p>The AWS Certificate Manager certificate that will be used to sign code with the new signing profile.</p>', 'SigningJob$signingMaterial' => '<p>A <code>SigningMaterial</code> object that contains the Amazon Resource Name (ARN) of the certificate used for the signing job.</p>', 'SigningProfile$signingMaterial' => '<p>The ACM certificate that is available for use by a signing profile.</p>', ], ], 'SigningParameterKey' => [ 'base' => NULL, 'refs' => [ 'SigningParameters$key' => NULL, ], ], 'SigningParameterValue' => [ 'base' => NULL, 'refs' => [ 'SigningParameters$value' => NULL, ], ], 'SigningParameters' => [ 'base' => NULL, 'refs' => [ 'DescribeSigningJobResponse$signingParameters' => '<p>Map of user-assigned key-value pairs used during signing. These values contain any information that you specified for use in your signing job. </p>', 'GetSigningProfileResponse$signingParameters' => '<p>A map of key-value pairs for signing operations that is attached to the target signing profile.</p>', 'PutSigningProfileRequest$signingParameters' => '<p>Map of key-value pairs for signing. These can include any information that you want to use during signing.</p>', 'SigningProfile$signingParameters' => '<p>The parameters that are available for use by an AWS Signer user.</p>', ], ], 'SigningPlatform' => [ 'base' => '<p>Contains information about the signing configurations and parameters that is used to perform an AWS Signer job.</p>', 'refs' => [ 'SigningPlatforms$member' => NULL, ], ], 'SigningPlatformOverrides' => [ 'base' => '<p>Any overrides that are applied to the signing configuration of an AWS Signer platform.</p>', 'refs' => [ 'DescribeSigningJobResponse$overrides' => '<p>A list of any overrides that were applied to the signing operation.</p>', 'GetSigningProfileResponse$overrides' => '<p>A list of overrides applied by the target signing profile for signing operations.</p>', 'PutSigningProfileRequest$overrides' => '<p>A subfield of <code>platform</code>. This specifies any different configuration options that you want to apply to the chosen platform (such as a different <code>hash-algorithm</code> or <code>signing-algorithm</code>).</p>', ], ], 'SigningPlatforms' => [ 'base' => NULL, 'refs' => [ 'ListSigningPlatformsResponse$platforms' => '<p>A list of all platforms that match the request parameters.</p>', ], ], 'SigningProfile' => [ 'base' => '<p>Contains information about the ACM certificates and AWS Signer configuration parameters that can be used by a given AWS Signer user.</p>', 'refs' => [ 'SigningProfiles$member' => NULL, ], ], 'SigningProfileStatus' => [ 'base' => NULL, 'refs' => [ 'GetSigningProfileResponse$status' => '<p>The status of the target signing profile.</p>', 'SigningProfile$status' => '<p>The status of an AWS Signer profile.</p>', ], ], 'SigningProfiles' => [ 'base' => NULL, 'refs' => [ 'ListSigningProfilesResponse$profiles' => '<p>A list of profiles that are available in the AWS account. This includes profiles with the status of <code>CANCELED</code> if the <code>includeCanceled</code> parameter is set to <code>true</code>.</p>', ], ], 'SigningStatus' => [ 'base' => NULL, 'refs' => [ 'DescribeSigningJobResponse$status' => '<p>Status of the signing job.</p>', 'ListSigningJobsRequest$status' => '<p>A status value with which to filter your results.</p>', 'SigningJob$status' => '<p>The status of the signing job.</p>', ], ], 'Source' => [ 'base' => '<p>An <code>S3Source</code> object that contains information about the S3 bucket where you saved your unsigned code.</p>', 'refs' => [ 'DescribeSigningJobResponse$source' => '<p>The object that contains the name of your S3 bucket or your raw code.</p>', 'SigningJob$source' => '<p>A <code>Source</code> that contains information about a signing job\'s code image source.</p>', 'StartSigningJobRequest$source' => '<p>The S3 bucket that contains the object to sign or a BLOB that contains your raw code.</p>', ], ], 'StartSigningJobRequest' => [ 'base' => NULL, 'refs' => [], ], 'StartSigningJobResponse' => [ 'base' => NULL, 'refs' => [], ], 'StatusReason' => [ 'base' => NULL, 'refs' => [ 'DescribeSigningJobResponse$statusReason' => '<p>String value that contains the status reason.</p>', ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'GetSigningPlatformResponse$partner' => '<p>A list of partner entities that use the target signing platform.</p>', 'GetSigningPlatformResponse$target' => '<p>The validation template that is used by the target signing platform.</p>', 'ListSigningPlatformsRequest$category' => '<p>The category type of a signing platform.</p>', 'ListSigningPlatformsRequest$partner' => '<p>Any partner entities connected to a signing platform.</p>', 'ListSigningPlatformsRequest$target' => '<p>The validation template that is used by the target signing platform.</p>', 'ListSigningPlatformsRequest$nextToken' => '<p>Value for specifying the next set of paginated results to return. After you receive a response with truncated results, use this parameter in a subsequent request. Set it to the value of <code>nextToken</code> from the response that you just received.</p>', 'ListSigningPlatformsResponse$nextToken' => '<p>Value for specifying the next set of paginated results to return.</p>', 'SigningPlatform$platformId' => '<p>The ID of an AWS Signer platform.</p>', 'SigningPlatform$displayName' => '<p>The display name of an AWS Signer platform.</p>', 'SigningPlatform$partner' => '<p>Any partner entities linked to an AWS Signer platform.</p>', 'SigningPlatform$target' => '<p>The types of targets that can be signed by an AWS Signer platform.</p>', ], ], 'ThrottlingException' => [ 'base' => '<p>The signing job has been throttled.</p>', 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>You signing certificate could not be validated.</p>', 'refs' => [], ], 'Version' => [ 'base' => NULL, 'refs' => [ 'S3Source$version' => '<p>Version of your source image in your version enabled S3 bucket.</p>', ], ], 'bool' => [ 'base' => NULL, 'refs' => [ 'ListSigningProfilesRequest$includeCanceled' => '<p>Designates whether to include profiles with the status of <code>CANCELED</code>.</p>', ], ], 'string' => [ 'base' => NULL, 'refs' => [ 'PutSigningProfileResponse$arn' => '<p>The Amazon Resource Name (ARN) of the signing profile created.</p>', ], ], ],];
