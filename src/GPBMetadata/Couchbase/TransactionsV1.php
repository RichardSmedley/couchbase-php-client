<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/transactions.v1.proto

namespace GPBMetadata\Couchbase;

class TransactionsV1
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(
            '
ą
couchbase/transactions.v1.protocouchbase.transactions.v1"e
TransactionBeginAttemptRequest
bucket_name (	
transaction_id (	H B
_transaction_id"M
TransactionBeginAttemptResponse
transaction_id (	

attempt_id (	"[
TransactionCommitRequest
bucket_name (	
transaction_id (	

attempt_id (	"
TransactionCommitResponse"]
TransactionRollbackRequest
bucket_name (	
transaction_id (	

attempt_id (	"
TransactionRollbackResponse"
TransactionGetRequest
bucket_name (	
transaction_id (	

attempt_id (	

scope_name (	
collection_name (	
key (	"4
TransactionGetResponse
cas (
value ("¤
TransactionInsertRequest
bucket_name (	
transaction_id (	

attempt_id (	

scope_name (	
collection_name (	
key (	
value ("(
TransactionInsertResponse
cas ("˛
TransactionReplaceRequest
bucket_name (	
transaction_id (	

attempt_id (	

scope_name (	
collection_name (	
key (	
cas (
value (")
TransactionReplaceResponse
cas ("ĸ
TransactionRemoveRequest
bucket_name (	
transaction_id (	

attempt_id (	

scope_name (	
collection_name (	
key (	
cas ("(
TransactionRemoveResponse
cas (2´
Transactions
TransactionBeginAttempt9.couchbase.transactions.v1.TransactionBeginAttemptRequest:.couchbase.transactions.v1.TransactionBeginAttemptResponse" 
TransactionCommit3.couchbase.transactions.v1.TransactionCommitRequest4.couchbase.transactions.v1.TransactionCommitResponse" 
TransactionRollback5.couchbase.transactions.v1.TransactionRollbackRequest6.couchbase.transactions.v1.TransactionRollbackResponse" w
TransactionGet0.couchbase.transactions.v1.TransactionGetRequest1.couchbase.transactions.v1.TransactionGetResponse" 
TransactionInsert3.couchbase.transactions.v1.TransactionInsertRequest4.couchbase.transactions.v1.TransactionInsertResponse" 
TransactionReplace4.couchbase.transactions.v1.TransactionReplaceRequest5.couchbase.transactions.v1.TransactionReplaceResponse" 
TransactionRemove3.couchbase.transactions.v1.TransactionRemoveRequest4.couchbase.transactions.v1.TransactionRemoveResponse" BēZLgithub.com/couchbase/stellar-nebula/genproto/transactions_v1;transactions_v1Ę1Couchbase\\StellarNebula\\Generated\\Transactions\\V1ę5Couchbase::StellarNebula::Generated::Transactions::V1bproto3',
            true
        );

        static::$is_initialized = true;
    }
}
