<?php
// This file was auto-generated from sdk-root/src/data/qldb/2019-01-02/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>The control plane for Amazon QLDB</p>', 'operations' => [ 'CancelJournalKinesisStream' => '<p>Ends a given Amazon QLDB journal stream. Before a stream can be canceled, its current status must be <code>ACTIVE</code>.</p> <p>You can\'t restart a stream after you cancel it. Canceled QLDB stream resources are subject to a 7-day retention period, so they are automatically deleted after this limit expires.</p>', 'CreateLedger' => '<p>Creates a new ledger in your AWS account.</p>', 'DeleteLedger' => '<p>Deletes a ledger and all of its contents. This action is irreversible.</p> <p>If deletion protection is enabled, you must first disable it before you can delete the ledger using the QLDB API or the AWS Command Line Interface (AWS CLI). You can disable it by calling the <code>UpdateLedger</code> operation to set the flag to <code>false</code>. The QLDB console disables deletion protection for you when you use it to delete a ledger.</p>', 'DescribeJournalKinesisStream' => '<p>Returns detailed information about a given Amazon QLDB journal stream. The output includes the Amazon Resource Name (ARN), stream name, current status, creation time, and the parameters of your original stream creation request.</p>', 'DescribeJournalS3Export' => '<p>Returns information about a journal export job, including the ledger name, export ID, when it was created, current status, and its start and end time export parameters.</p> <p>This action does not return any expired export jobs. For more information, see <a href="https://docs.aws.amazon.com/qldb/latest/developerguide/export-journal.request.html#export-journal.request.expiration">Export Job Expiration</a> in the <i>Amazon QLDB Developer Guide</i>.</p> <p>If the export job with the given <code>ExportId</code> doesn\'t exist, then throws <code>ResourceNotFoundException</code>.</p> <p>If the ledger with the given <code>Name</code> doesn\'t exist, then throws <code>ResourceNotFoundException</code>.</p>', 'DescribeLedger' => '<p>Returns information about a ledger, including its state and when it was created.</p>', 'ExportJournalToS3' => '<p>Exports journal contents within a date and time range from a ledger into a specified Amazon Simple Storage Service (Amazon S3) bucket. The data is written as files in Amazon Ion format.</p> <p>If the ledger with the given <code>Name</code> doesn\'t exist, then throws <code>ResourceNotFoundException</code>.</p> <p>If the ledger with the given <code>Name</code> is in <code>CREATING</code> status, then throws <code>ResourcePreconditionNotMetException</code>.</p> <p>You can initiate up to two concurrent journal export requests for each ledger. Beyond this limit, journal export requests throw <code>LimitExceededException</code>.</p>', 'GetBlock' => '<p>Returns a block object at a specified address in a journal. Also returns a proof of the specified block for verification if <code>DigestTipAddress</code> is provided.</p> <p>For information about the data contents in a block, see <a href="https://docs.aws.amazon.com/qldb/latest/developerguide/journal-contents.html">Journal contents</a> in the <i>Amazon QLDB Developer Guide</i>.</p> <p>If the specified ledger doesn\'t exist or is in <code>DELETING</code> status, then throws <code>ResourceNotFoundException</code>.</p> <p>If the specified ledger is in <code>CREATING</code> status, then throws <code>ResourcePreconditionNotMetException</code>.</p> <p>If no block exists with the specified address, then throws <code>InvalidParameterException</code>.</p>', 'GetDigest' => '<p>Returns the digest of a ledger at the latest committed block in the journal. The response includes a 256-bit hash value and a block address.</p>', 'GetRevision' => '<p>Returns a revision data object for a specified document ID and block address. Also returns a proof of the specified revision for verification if <code>DigestTipAddress</code> is provided.</p>', 'ListJournalKinesisStreamsForLedger' => '<p>Returns an array of all Amazon QLDB journal stream descriptors for a given ledger. The output of each stream descriptor includes the same details that are returned by <code>DescribeJournalKinesisStream</code>.</p> <p>This action returns a maximum of <code>MaxResults</code> items. It is paginated so that you can retrieve all the items by calling <code>ListJournalKinesisStreamsForLedger</code> multiple times.</p>', 'ListJournalS3Exports' => '<p>Returns an array of journal export job descriptions for all ledgers that are associated with the current AWS account and Region.</p> <p>This action returns a maximum of <code>MaxResults</code> items, and is paginated so that you can retrieve all the items by calling <code>ListJournalS3Exports</code> multiple times.</p> <p>This action does not return any expired export jobs. For more information, see <a href="https://docs.aws.amazon.com/qldb/latest/developerguide/export-journal.request.html#export-journal.request.expiration">Export Job Expiration</a> in the <i>Amazon QLDB Developer Guide</i>.</p>', 'ListJournalS3ExportsForLedger' => '<p>Returns an array of journal export job descriptions for a specified ledger.</p> <p>This action returns a maximum of <code>MaxResults</code> items, and is paginated so that you can retrieve all the items by calling <code>ListJournalS3ExportsForLedger</code> multiple times.</p> <p>This action does not return any expired export jobs. For more information, see <a href="https://docs.aws.amazon.com/qldb/latest/developerguide/export-journal.request.html#export-journal.request.expiration">Export Job Expiration</a> in the <i>Amazon QLDB Developer Guide</i>.</p>', 'ListLedgers' => '<p>Returns an array of ledger summaries that are associated with the current AWS account and Region.</p> <p>This action returns a maximum of 100 items and is paginated so that you can retrieve all the items by calling <code>ListLedgers</code> multiple times.</p>', 'ListTagsForResource' => '<p>Returns all tags for a specified Amazon QLDB resource.</p>', 'StreamJournalToKinesis' => '<p>Creates a journal stream for a given Amazon QLDB ledger. The stream captures every document revision that is committed to the ledger\'s journal and delivers the data to a specified Amazon Kinesis Data Streams resource.</p>', 'TagResource' => '<p>Adds one or more tags to a specified Amazon QLDB resource.</p> <p>A resource can have up to 50 tags. If you try to create more than 50 tags for a resource, your request fails and returns an error.</p>', 'UntagResource' => '<p>Removes one or more tags from a specified Amazon QLDB resource. You can specify up to 50 tag keys to remove.</p>', 'UpdateLedger' => '<p>Updates properties on a ledger.</p>', ], 'shapes' => [ 'Arn' => [ 'base' => NULL, 'refs' => [ 'CreateLedgerResponse$Arn' => '<p>The Amazon Resource Name (ARN) for the ledger.</p>', 'DescribeLedgerResponse$Arn' => '<p>The Amazon Resource Name (ARN) for the ledger.</p>', 'ExportJournalToS3Request$RoleArn' => '<p>The Amazon Resource Name (ARN) of the IAM role that grants QLDB permissions for a journal export job to do the following:</p> <ul> <li> <p>Write objects into your Amazon Simple Storage Service (Amazon S3) bucket.</p> </li> <li> <p>(Optional) Use your customer master key (CMK) in AWS Key Management Service (AWS KMS) for server-side encryption of your exported data.</p> </li> </ul>', 'JournalKinesisStreamDescription$RoleArn' => '<p>The Amazon Resource Name (ARN) of the IAM role that grants QLDB permissions for a journal stream to write data records to a Kinesis Data Streams resource.</p>', 'JournalKinesisStreamDescription$Arn' => '<p>The Amazon Resource Name (ARN) of the QLDB journal stream.</p>', 'JournalS3ExportDescription$RoleArn' => '<p>The Amazon Resource Name (ARN) of the IAM role that grants QLDB permissions for a journal export job to do the following:</p> <ul> <li> <p>Write objects into your Amazon Simple Storage Service (Amazon S3) bucket.</p> </li> <li> <p>(Optional) Use your customer master key (CMK) in AWS Key Management Service (AWS KMS) for server-side encryption of your exported data.</p> </li> </ul>', 'KinesisConfiguration$StreamArn' => '<p>The Amazon Resource Name (ARN) of the Kinesis data stream resource.</p>', 'ListTagsForResourceRequest$ResourceArn' => '<p>The Amazon Resource Name (ARN) for which you want to list the tags. For example:</p> <p> <code>arn:aws:qldb:us-east-1:123456789012:ledger/exampleLedger</code> </p>', 'S3EncryptionConfiguration$KmsKeyArn' => '<p>The Amazon Resource Name (ARN) for a symmetric customer master key (CMK) in AWS Key Management Service (AWS KMS). Amazon QLDB does not support asymmetric CMKs.</p> <p>You must provide a <code>KmsKeyArn</code> if you specify <code>SSE_KMS</code> as the <code>ObjectEncryptionType</code>.</p> <p> <code>KmsKeyArn</code> is not required if you specify <code>SSE_S3</code> as the <code>ObjectEncryptionType</code>.</p>', 'StreamJournalToKinesisRequest$RoleArn' => '<p>The Amazon Resource Name (ARN) of the IAM role that grants QLDB permissions for a journal stream to write data records to a Kinesis Data Streams resource.</p>', 'TagResourceRequest$ResourceArn' => '<p>The Amazon Resource Name (ARN) to which you want to add the tags. For example:</p> <p> <code>arn:aws:qldb:us-east-1:123456789012:ledger/exampleLedger</code> </p>', 'UntagResourceRequest$ResourceArn' => '<p>The Amazon Resource Name (ARN) from which you want to remove the tags. For example:</p> <p> <code>arn:aws:qldb:us-east-1:123456789012:ledger/exampleLedger</code> </p>', 'UpdateLedgerResponse$Arn' => '<p>The Amazon Resource Name (ARN) for the ledger.</p>', ], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'KinesisConfiguration$AggregationEnabled' => '<p>Enables QLDB to publish multiple data records in a single Kinesis Data Streams record. To learn more, see <a href="https://docs.aws.amazon.com/streams/latest/dev/kinesis-kpl-concepts.html">KPL Key Concepts</a> in the <i>Amazon Kinesis Data Streams Developer Guide</i>.</p>', ], ], 'CancelJournalKinesisStreamRequest' => [ 'base' => NULL, 'refs' => [], ], 'CancelJournalKinesisStreamResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateLedgerRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateLedgerResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteLedgerRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeletionProtection' => [ 'base' => NULL, 'refs' => [ 'CreateLedgerRequest$DeletionProtection' => '<p>The flag that prevents a ledger from being deleted by any user. If not provided on ledger creation, this feature is enabled (<code>true</code>) by default.</p> <p>If deletion protection is enabled, you must first disable it before you can delete the ledger using the QLDB API or the AWS Command Line Interface (AWS CLI). You can disable it by calling the <code>UpdateLedger</code> operation to set the flag to <code>false</code>. The QLDB console disables deletion protection for you when you use it to delete a ledger.</p>', 'CreateLedgerResponse$DeletionProtection' => '<p>The flag that prevents a ledger from being deleted by any user. If not provided on ledger creation, this feature is enabled (<code>true</code>) by default.</p> <p>If deletion protection is enabled, you must first disable it before you can delete the ledger using the QLDB API or the AWS Command Line Interface (AWS CLI). You can disable it by calling the <code>UpdateLedger</code> operation to set the flag to <code>false</code>. The QLDB console disables deletion protection for you when you use it to delete a ledger.</p>', 'DescribeLedgerResponse$DeletionProtection' => '<p>The flag that prevents a ledger from being deleted by any user. If not provided on ledger creation, this feature is enabled (<code>true</code>) by default.</p> <p>If deletion protection is enabled, you must first disable it before you can delete the ledger using the QLDB API or the AWS Command Line Interface (AWS CLI). You can disable it by calling the <code>UpdateLedger</code> operation to set the flag to <code>false</code>. The QLDB console disables deletion protection for you when you use it to delete a ledger.</p>', 'UpdateLedgerRequest$DeletionProtection' => '<p>The flag that prevents a ledger from being deleted by any user. If not provided on ledger creation, this feature is enabled (<code>true</code>) by default.</p> <p>If deletion protection is enabled, you must first disable it before you can delete the ledger using the QLDB API or the AWS Command Line Interface (AWS CLI). You can disable it by calling the <code>UpdateLedger</code> operation to set the flag to <code>false</code>. The QLDB console disables deletion protection for you when you use it to delete a ledger.</p>', 'UpdateLedgerResponse$DeletionProtection' => '<p>The flag that prevents a ledger from being deleted by any user. If not provided on ledger creation, this feature is enabled (<code>true</code>) by default.</p> <p>If deletion protection is enabled, you must first disable it before you can delete the ledger using the QLDB API or the AWS Command Line Interface (AWS CLI). You can disable it by calling the <code>UpdateLedger</code> operation to set the flag to <code>false</code>. The QLDB console disables deletion protection for you when you use it to delete a ledger.</p>', ], ], 'DescribeJournalKinesisStreamRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeJournalKinesisStreamResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeJournalS3ExportRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeJournalS3ExportResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeLedgerRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeLedgerResponse' => [ 'base' => NULL, 'refs' => [], ], 'Digest' => [ 'base' => NULL, 'refs' => [ 'GetDigestResponse$Digest' => '<p>The 256-bit hash value representing the digest returned by a <code>GetDigest</code> request.</p>', ], ], 'ErrorCause' => [ 'base' => NULL, 'refs' => [ 'JournalKinesisStreamDescription$ErrorCause' => '<p>The error message that describes the reason that a stream has a status of <code>IMPAIRED</code> or <code>FAILED</code>. This is not applicable to streams that have other status values.</p>', ], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'InvalidParameterException$Message' => NULL, 'LimitExceededException$Message' => NULL, 'ResourceAlreadyExistsException$Message' => NULL, 'ResourceInUseException$Message' => NULL, 'ResourceNotFoundException$Message' => NULL, 'ResourcePreconditionNotMetException$Message' => NULL, ], ], 'ExportJournalToS3Request' => [ 'base' => NULL, 'refs' => [], ], 'ExportJournalToS3Response' => [ 'base' => NULL, 'refs' => [], ], 'ExportStatus' => [ 'base' => NULL, 'refs' => [ 'JournalS3ExportDescription$Status' => '<p>The current state of the journal export job.</p>', ], ], 'GetBlockRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetBlockResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetDigestRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDigestResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetRevisionRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetRevisionResponse' => [ 'base' => NULL, 'refs' => [], ], 'InvalidParameterException' => [ 'base' => '<p>One or more parameters in the request aren\'t valid.</p>', 'refs' => [], ], 'IonText' => [ 'base' => NULL, 'refs' => [ 'ValueHolder$IonText' => '<p>An Amazon Ion plaintext value contained in a <code>ValueHolder</code> structure.</p>', ], ], 'JournalKinesisStreamDescription' => [ 'base' => '<p>The information about an Amazon QLDB journal stream, including the Amazon Resource Name (ARN), stream name, creation time, current status, and the parameters of your original stream creation request.</p>', 'refs' => [ 'DescribeJournalKinesisStreamResponse$Stream' => '<p>Information about the QLDB journal stream returned by a <code>DescribeJournalS3Export</code> request.</p>', 'JournalKinesisStreamDescriptionList$member' => NULL, ], ], 'JournalKinesisStreamDescriptionList' => [ 'base' => NULL, 'refs' => [ 'ListJournalKinesisStreamsForLedgerResponse$Streams' => '<p>The array of QLDB journal stream descriptors that are associated with the given ledger.</p>', ], ], 'JournalS3ExportDescription' => [ 'base' => '<p>The information about a journal export job, including the ledger name, export ID, when it was created, current status, and its start and end time export parameters.</p>', 'refs' => [ 'DescribeJournalS3ExportResponse$ExportDescription' => '<p>Information about the journal export job returned by a <code>DescribeJournalS3Export</code> request.</p>', 'JournalS3ExportList$member' => NULL, ], ], 'JournalS3ExportList' => [ 'base' => NULL, 'refs' => [ 'ListJournalS3ExportsForLedgerResponse$JournalS3Exports' => '<p>The array of journal export job descriptions that are associated with the specified ledger.</p>', 'ListJournalS3ExportsResponse$JournalS3Exports' => '<p>The array of journal export job descriptions for all ledgers that are associated with the current AWS account and Region.</p>', ], ], 'KinesisConfiguration' => [ 'base' => '<p>The configuration settings of the Amazon Kinesis Data Streams destination for your Amazon QLDB journal stream.</p>', 'refs' => [ 'JournalKinesisStreamDescription$KinesisConfiguration' => '<p>The configuration settings of the Amazon Kinesis Data Streams destination for your QLDB journal stream.</p>', 'StreamJournalToKinesisRequest$KinesisConfiguration' => '<p>The configuration settings of the Kinesis Data Streams destination for your stream request.</p>', ], ], 'LedgerList' => [ 'base' => NULL, 'refs' => [ 'ListLedgersResponse$Ledgers' => '<p>The array of ledger summaries that are associated with the current AWS account and Region.</p>', ], ], 'LedgerName' => [ 'base' => NULL, 'refs' => [ 'CancelJournalKinesisStreamRequest$LedgerName' => '<p>The name of the ledger.</p>', 'CreateLedgerRequest$Name' => '<p>The name of the ledger that you want to create. The name must be unique among all of your ledgers in the current AWS Region.</p> <p>Naming constraints for ledger names are defined in <a href="https://docs.aws.amazon.com/qldb/latest/developerguide/limits.html#limits.naming">Quotas in Amazon QLDB</a> in the <i>Amazon QLDB Developer Guide</i>.</p>', 'CreateLedgerResponse$Name' => '<p>The name of the ledger.</p>', 'DeleteLedgerRequest$Name' => '<p>The name of the ledger that you want to delete.</p>', 'DescribeJournalKinesisStreamRequest$LedgerName' => '<p>The name of the ledger.</p>', 'DescribeJournalS3ExportRequest$Name' => '<p>The name of the ledger.</p>', 'DescribeLedgerRequest$Name' => '<p>The name of the ledger that you want to describe.</p>', 'DescribeLedgerResponse$Name' => '<p>The name of the ledger.</p>', 'ExportJournalToS3Request$Name' => '<p>The name of the ledger.</p>', 'GetBlockRequest$Name' => '<p>The name of the ledger.</p>', 'GetDigestRequest$Name' => '<p>The name of the ledger.</p>', 'GetRevisionRequest$Name' => '<p>The name of the ledger.</p>', 'JournalKinesisStreamDescription$LedgerName' => '<p>The name of the ledger.</p>', 'JournalS3ExportDescription$LedgerName' => '<p>The name of the ledger.</p>', 'LedgerSummary$Name' => '<p>The name of the ledger.</p>', 'ListJournalKinesisStreamsForLedgerRequest$LedgerName' => '<p>The name of the ledger.</p>', 'ListJournalS3ExportsForLedgerRequest$Name' => '<p>The name of the ledger.</p>', 'StreamJournalToKinesisRequest$LedgerName' => '<p>The name of the ledger.</p>', 'UpdateLedgerRequest$Name' => '<p>The name of the ledger.</p>', 'UpdateLedgerResponse$Name' => '<p>The name of the ledger.</p>', ], ], 'LedgerState' => [ 'base' => NULL, 'refs' => [ 'CreateLedgerResponse$State' => '<p>The current status of the ledger.</p>', 'DescribeLedgerResponse$State' => '<p>The current status of the ledger.</p>', 'LedgerSummary$State' => '<p>The current status of the ledger.</p>', 'UpdateLedgerResponse$State' => '<p>The current status of the ledger.</p>', ], ], 'LedgerSummary' => [ 'base' => '<p>Information about a ledger, including its name, state, and when it was created.</p>', 'refs' => [ 'LedgerList$member' => NULL, ], ], 'LimitExceededException' => [ 'base' => '<p>You have reached the limit on the maximum number of resources allowed.</p>', 'refs' => [], ], 'ListJournalKinesisStreamsForLedgerRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListJournalKinesisStreamsForLedgerResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListJournalS3ExportsForLedgerRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListJournalS3ExportsForLedgerResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListJournalS3ExportsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListJournalS3ExportsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListLedgersRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListLedgersResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListJournalKinesisStreamsForLedgerRequest$MaxResults' => '<p>The maximum number of results to return in a single <code>ListJournalKinesisStreamsForLedger</code> request. (The actual number of results returned might be fewer.)</p>', 'ListJournalS3ExportsForLedgerRequest$MaxResults' => '<p>The maximum number of results to return in a single <code>ListJournalS3ExportsForLedger</code> request. (The actual number of results returned might be fewer.)</p>', 'ListJournalS3ExportsRequest$MaxResults' => '<p>The maximum number of results to return in a single <code>ListJournalS3Exports</code> request. (The actual number of results returned might be fewer.)</p>', 'ListLedgersRequest$MaxResults' => '<p>The maximum number of results to return in a single <code>ListLedgers</code> request. (The actual number of results returned might be fewer.)</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListJournalKinesisStreamsForLedgerRequest$NextToken' => '<p>A pagination token, indicating that you want to retrieve the next page of results. If you received a value for <code>NextToken</code> in the response from a previous <code>ListJournalKinesisStreamsForLedger</code> call, you should use that value as input here.</p>', 'ListJournalKinesisStreamsForLedgerResponse$NextToken' => '<ul> <li> <p>If <code>NextToken</code> is empty, the last page of results has been processed and there are no more results to be retrieved.</p> </li> <li> <p>If <code>NextToken</code> is <i>not</i> empty, more results are available. To retrieve the next page of results, use the value of <code>NextToken</code> in a subsequent <code>ListJournalKinesisStreamsForLedger</code> call.</p> </li> </ul>', 'ListJournalS3ExportsForLedgerRequest$NextToken' => '<p>A pagination token, indicating that you want to retrieve the next page of results. If you received a value for <code>NextToken</code> in the response from a previous <code>ListJournalS3ExportsForLedger</code> call, then you should use that value as input here.</p>', 'ListJournalS3ExportsForLedgerResponse$NextToken' => '<ul> <li> <p>If <code>NextToken</code> is empty, then the last page of results has been processed and there are no more results to be retrieved.</p> </li> <li> <p>If <code>NextToken</code> is <i>not</i> empty, then there are more results available. To retrieve the next page of results, use the value of <code>NextToken</code> in a subsequent <code>ListJournalS3ExportsForLedger</code> call.</p> </li> </ul>', 'ListJournalS3ExportsRequest$NextToken' => '<p>A pagination token, indicating that you want to retrieve the next page of results. If you received a value for <code>NextToken</code> in the response from a previous <code>ListJournalS3Exports</code> call, then you should use that value as input here.</p>', 'ListJournalS3ExportsResponse$NextToken' => '<ul> <li> <p>If <code>NextToken</code> is empty, then the last page of results has been processed and there are no more results to be retrieved.</p> </li> <li> <p>If <code>NextToken</code> is <i>not</i> empty, then there are more results available. To retrieve the next page of results, use the value of <code>NextToken</code> in a subsequent <code>ListJournalS3Exports</code> call.</p> </li> </ul>', 'ListLedgersRequest$NextToken' => '<p>A pagination token, indicating that you want to retrieve the next page of results. If you received a value for <code>NextToken</code> in the response from a previous <code>ListLedgers</code> call, then you should use that value as input here.</p>', 'ListLedgersResponse$NextToken' => '<p>A pagination token, indicating whether there are more results available:</p> <ul> <li> <p>If <code>NextToken</code> is empty, then the last page of results has been processed and there are no more results to be retrieved.</p> </li> <li> <p>If <code>NextToken</code> is <i>not</i> empty, then there are more results available. To retrieve the next page of results, use the value of <code>NextToken</code> in a subsequent <code>ListLedgers</code> call.</p> </li> </ul>', ], ], 'ParameterName' => [ 'base' => NULL, 'refs' => [ 'InvalidParameterException$ParameterName' => '<p>The name of the invalid parameter.</p>', ], ], 'PermissionsMode' => [ 'base' => NULL, 'refs' => [ 'CreateLedgerRequest$PermissionsMode' => '<p>The permissions mode to assign to the ledger that you want to create.</p>', ], ], 'ResourceAlreadyExistsException' => [ 'base' => '<p>The specified resource already exists.</p>', 'refs' => [], ], 'ResourceInUseException' => [ 'base' => '<p>The specified resource can\'t be modified at this time.</p>', 'refs' => [], ], 'ResourceName' => [ 'base' => NULL, 'refs' => [ 'ResourceAlreadyExistsException$ResourceName' => '<p>The name of the resource.</p>', 'ResourceInUseException$ResourceName' => '<p>The name of the resource.</p>', 'ResourceNotFoundException$ResourceName' => '<p>The name of the resource.</p>', 'ResourcePreconditionNotMetException$ResourceName' => '<p>The name of the resource.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource doesn\'t exist.</p>', 'refs' => [], ], 'ResourcePreconditionNotMetException' => [ 'base' => '<p>The operation failed because a condition wasn\'t satisfied in advance.</p>', 'refs' => [], ], 'ResourceType' => [ 'base' => NULL, 'refs' => [ 'LimitExceededException$ResourceType' => '<p>The type of resource.</p>', 'ResourceAlreadyExistsException$ResourceType' => '<p>The type of resource.</p>', 'ResourceInUseException$ResourceType' => '<p>The type of resource.</p>', 'ResourceNotFoundException$ResourceType' => '<p>The type of resource.</p>', 'ResourcePreconditionNotMetException$ResourceType' => '<p>The type of resource.</p>', ], ], 'S3Bucket' => [ 'base' => NULL, 'refs' => [ 'S3ExportConfiguration$Bucket' => '<p>The Amazon S3 bucket name in which a journal export job writes the journal contents.</p> <p>The bucket name must comply with the Amazon S3 bucket naming conventions. For more information, see <a href="https://docs.aws.amazon.com/AmazonS3/latest/dev/BucketRestrictions.html">Bucket Restrictions and Limitations</a> in the <i>Amazon S3 Developer Guide</i>.</p>', ], ], 'S3EncryptionConfiguration' => [ 'base' => '<p>The encryption settings that are used by a journal export job to write data in an Amazon Simple Storage Service (Amazon S3) bucket.</p>', 'refs' => [ 'S3ExportConfiguration$EncryptionConfiguration' => '<p>The encryption settings that are used by a journal export job to write data in an Amazon S3 bucket.</p>', ], ], 'S3ExportConfiguration' => [ 'base' => '<p>The Amazon Simple Storage Service (Amazon S3) bucket location in which a journal export job writes the journal contents.</p>', 'refs' => [ 'ExportJournalToS3Request$S3ExportConfiguration' => '<p>The configuration settings of the Amazon S3 bucket destination for your export request.</p>', 'JournalS3ExportDescription$S3ExportConfiguration' => NULL, ], ], 'S3ObjectEncryptionType' => [ 'base' => NULL, 'refs' => [ 'S3EncryptionConfiguration$ObjectEncryptionType' => '<p>The Amazon S3 object encryption type.</p> <p>To learn more about server-side encryption options in Amazon S3, see <a href="https://docs.aws.amazon.com/AmazonS3/latest/dev/serv-side-encryption.html">Protecting Data Using Server-Side Encryption</a> in the <i>Amazon S3 Developer Guide</i>.</p>', ], ], 'S3Prefix' => [ 'base' => NULL, 'refs' => [ 'S3ExportConfiguration$Prefix' => '<p>The prefix for the Amazon S3 bucket in which a journal export job writes the journal contents.</p> <p>The prefix must comply with Amazon S3 key naming rules and restrictions. For more information, see <a href="https://docs.aws.amazon.com/AmazonS3/latest/dev/UsingMetadata.html">Object Key and Metadata</a> in the <i>Amazon S3 Developer Guide</i>.</p> <p>The following are examples of valid <code>Prefix</code> values:</p> <ul> <li> <p> <code>JournalExports-ForMyLedger/Testing/</code> </p> </li> <li> <p> <code>JournalExports</code> </p> </li> <li> <p> <code>My:Tests/</code> </p> </li> </ul>', ], ], 'StreamJournalToKinesisRequest' => [ 'base' => NULL, 'refs' => [], ], 'StreamJournalToKinesisResponse' => [ 'base' => NULL, 'refs' => [], ], 'StreamName' => [ 'base' => NULL, 'refs' => [ 'JournalKinesisStreamDescription$StreamName' => '<p>The user-defined name of the QLDB journal stream.</p>', 'StreamJournalToKinesisRequest$StreamName' => '<p>The name that you want to assign to the QLDB journal stream. User-defined names can help identify and indicate the purpose of a stream.</p> <p>Your stream name must be unique among other <i>active</i> streams for a given ledger. Stream names have the same naming constraints as ledger names, as defined in <a href="https://docs.aws.amazon.com/qldb/latest/developerguide/limits.html#limits.naming">Quotas in Amazon QLDB</a> in the <i>Amazon QLDB Developer Guide</i>.</p>', ], ], 'StreamStatus' => [ 'base' => NULL, 'refs' => [ 'JournalKinesisStreamDescription$Status' => '<p>The current state of the QLDB journal stream.</p>', ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeyList$member' => NULL, 'Tags$key' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$TagKeys' => '<p>The list of tag keys that you want to remove.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'Tags$value' => NULL, ], ], 'Tags' => [ 'base' => NULL, 'refs' => [ 'CreateLedgerRequest$Tags' => '<p>The key-value pairs to add as tags to the ledger that you want to create. Tag keys are case sensitive. Tag values are case sensitive and can be null.</p>', 'ListTagsForResourceResponse$Tags' => '<p>The tags that are currently associated with the specified Amazon QLDB resource.</p>', 'StreamJournalToKinesisRequest$Tags' => '<p>The key-value pairs to add as tags to the stream that you want to create. Tag keys are case sensitive. Tag values are case sensitive and can be null.</p>', 'TagResourceRequest$Tags' => '<p>The key-value pairs to add as tags to the specified QLDB resource. Tag keys are case sensitive. If you specify a key that already exists for the resource, your request fails and returns an error. Tag values are case sensitive and can be null.</p>', ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'CreateLedgerResponse$CreationDateTime' => '<p>The date and time, in epoch time format, when the ledger was created. (Epoch time format is the number of seconds elapsed since 12:00:00 AM January 1, 1970 UTC.)</p>', 'DescribeLedgerResponse$CreationDateTime' => '<p>The date and time, in epoch time format, when the ledger was created. (Epoch time format is the number of seconds elapsed since 12:00:00 AM January 1, 1970 UTC.)</p>', 'ExportJournalToS3Request$InclusiveStartTime' => '<p>The inclusive start date and time for the range of journal contents that you want to export.</p> <p>The <code>InclusiveStartTime</code> must be in <code>ISO 8601</code> date and time format and in Universal Coordinated Time (UTC). For example: <code>2019-06-13T21:36:34Z</code> </p> <p>The <code>InclusiveStartTime</code> must be before <code>ExclusiveEndTime</code>.</p> <p>If you provide an <code>InclusiveStartTime</code> that is before the ledger\'s <code>CreationDateTime</code>, Amazon QLDB defaults it to the ledger\'s <code>CreationDateTime</code>.</p>', 'ExportJournalToS3Request$ExclusiveEndTime' => '<p>The exclusive end date and time for the range of journal contents that you want to export.</p> <p>The <code>ExclusiveEndTime</code> must be in <code>ISO 8601</code> date and time format and in Universal Coordinated Time (UTC). For example: <code>2019-06-13T21:36:34Z</code> </p> <p>The <code>ExclusiveEndTime</code> must be less than or equal to the current UTC date and time.</p>', 'JournalKinesisStreamDescription$CreationTime' => '<p>The date and time, in epoch time format, when the QLDB journal stream was created. (Epoch time format is the number of seconds elapsed since 12:00:00 AM January 1, 1970 UTC.)</p>', 'JournalKinesisStreamDescription$InclusiveStartTime' => '<p>The inclusive start date and time from which to start streaming journal data.</p>', 'JournalKinesisStreamDescription$ExclusiveEndTime' => '<p>The exclusive date and time that specifies when the stream ends. If this parameter is blank, the stream runs indefinitely until you cancel it.</p>', 'JournalS3ExportDescription$ExportCreationTime' => '<p>The date and time, in epoch time format, when the export job was created. (Epoch time format is the number of seconds elapsed since 12:00:00 AM January 1, 1970 UTC.)</p>', 'JournalS3ExportDescription$InclusiveStartTime' => '<p>The inclusive start date and time for the range of journal contents that are specified in the original export request.</p>', 'JournalS3ExportDescription$ExclusiveEndTime' => '<p>The exclusive end date and time for the range of journal contents that are specified in the original export request.</p>', 'LedgerSummary$CreationDateTime' => '<p>The date and time, in epoch time format, when the ledger was created. (Epoch time format is the number of seconds elapsed since 12:00:00 AM January 1, 1970 UTC.)</p>', 'StreamJournalToKinesisRequest$InclusiveStartTime' => '<p>The inclusive start date and time from which to start streaming journal data. This parameter must be in <code>ISO 8601</code> date and time format and in Universal Coordinated Time (UTC). For example: <code>2019-06-13T21:36:34Z</code> </p> <p>The <code>InclusiveStartTime</code> cannot be in the future and must be before <code>ExclusiveEndTime</code>.</p> <p>If you provide an <code>InclusiveStartTime</code> that is before the ledger\'s <code>CreationDateTime</code>, QLDB effectively defaults it to the ledger\'s <code>CreationDateTime</code>.</p>', 'StreamJournalToKinesisRequest$ExclusiveEndTime' => '<p>The exclusive date and time that specifies when the stream ends. If you don\'t define this parameter, the stream runs indefinitely until you cancel it.</p> <p>The <code>ExclusiveEndTime</code> must be in <code>ISO 8601</code> date and time format and in Universal Coordinated Time (UTC). For example: <code>2019-06-13T21:36:34Z</code> </p>', 'UpdateLedgerResponse$CreationDateTime' => '<p>The date and time, in epoch time format, when the ledger was created. (Epoch time format is the number of seconds elapsed since 12:00:00 AM January 1, 1970 UTC.)</p>', ], ], 'UniqueId' => [ 'base' => NULL, 'refs' => [ 'CancelJournalKinesisStreamRequest$StreamId' => '<p>The unique ID that QLDB assigns to each QLDB journal stream.</p>', 'CancelJournalKinesisStreamResponse$StreamId' => '<p>The unique ID that QLDB assigns to each QLDB journal stream.</p>', 'DescribeJournalKinesisStreamRequest$StreamId' => '<p>The unique ID that QLDB assigns to each QLDB journal stream.</p>', 'DescribeJournalS3ExportRequest$ExportId' => '<p>The unique ID of the journal export job that you want to describe.</p>', 'ExportJournalToS3Response$ExportId' => '<p>The unique ID that QLDB assigns to each journal export job.</p> <p>To describe your export request and check the status of the job, you can use <code>ExportId</code> to call <code>DescribeJournalS3Export</code>.</p>', 'GetRevisionRequest$DocumentId' => '<p>The unique ID of the document to be verified.</p>', 'JournalKinesisStreamDescription$StreamId' => '<p>The unique ID that QLDB assigns to each QLDB journal stream.</p>', 'JournalS3ExportDescription$ExportId' => '<p>The unique ID of the journal export job.</p>', 'StreamJournalToKinesisResponse$StreamId' => '<p>The unique ID that QLDB assigns to each QLDB journal stream.</p>', ], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLedgerRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLedgerResponse' => [ 'base' => NULL, 'refs' => [], ], 'ValueHolder' => [ 'base' => '<p>A structure that can contain a value in multiple encoding formats.</p>', 'refs' => [ 'GetBlockRequest$BlockAddress' => '<p>The location of the block that you want to request. An address is an Amazon Ion structure that has two fields: <code>strandId</code> and <code>sequenceNo</code>.</p> <p>For example: <code>{strandId:"BlFTjlSXze9BIh1KOszcE3",sequenceNo:14}</code> </p>', 'GetBlockRequest$DigestTipAddress' => '<p>The latest block location covered by the digest for which to request a proof. An address is an Amazon Ion structure that has two fields: <code>strandId</code> and <code>sequenceNo</code>.</p> <p>For example: <code>{strandId:"BlFTjlSXze9BIh1KOszcE3",sequenceNo:49}</code> </p>', 'GetBlockResponse$Block' => '<p>The block data object in Amazon Ion format.</p>', 'GetBlockResponse$Proof' => '<p>The proof object in Amazon Ion format returned by a <code>GetBlock</code> request. A proof contains the list of hash values required to recalculate the specified digest using a Merkle tree, starting with the specified block.</p>', 'GetDigestResponse$DigestTipAddress' => '<p>The latest block location covered by the digest that you requested. An address is an Amazon Ion structure that has two fields: <code>strandId</code> and <code>sequenceNo</code>.</p>', 'GetRevisionRequest$BlockAddress' => '<p>The block location of the document revision to be verified. An address is an Amazon Ion structure that has two fields: <code>strandId</code> and <code>sequenceNo</code>.</p> <p>For example: <code>{strandId:"BlFTjlSXze9BIh1KOszcE3",sequenceNo:14}</code> </p>', 'GetRevisionRequest$DigestTipAddress' => '<p>The latest block location covered by the digest for which to request a proof. An address is an Amazon Ion structure that has two fields: <code>strandId</code> and <code>sequenceNo</code>.</p> <p>For example: <code>{strandId:"BlFTjlSXze9BIh1KOszcE3",sequenceNo:49}</code> </p>', 'GetRevisionResponse$Proof' => '<p>The proof object in Amazon Ion format returned by a <code>GetRevision</code> request. A proof contains the list of hash values that are required to recalculate the specified digest using a Merkle tree, starting with the specified document revision.</p>', 'GetRevisionResponse$Revision' => '<p>The document revision data object in Amazon Ion format.</p>', ], ], ],];
