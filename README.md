# OpenAPIClient-php


Authorization as a service



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\APIHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->getApiEventV2HistoryEventIdGet($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIHistoryApi->getApiEventV2HistoryEventIdGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APIHistoryApi* | [**getApiEventV2HistoryEventIdGet**](docs/Api/APIHistoryApi.md#getapieventv2historyeventidget) | **GET** /v2/history/{event_id} | Get Api Event
*APIHistoryApi* | [**getRequestBodyV2HistoryEventIdRequestGet**](docs/Api/APIHistoryApi.md#getrequestbodyv2historyeventidrequestget) | **GET** /v2/history/{event_id}/request | Get Request Body
*APIHistoryApi* | [**getResponseBodyV2HistoryEventIdResponseGet**](docs/Api/APIHistoryApi.md#getresponsebodyv2historyeventidresponseget) | **GET** /v2/history/{event_id}/response | Get Response Body
*APIHistoryApi* | [**listApiEventsV2HistoryGet**](docs/Api/APIHistoryApi.md#listapieventsv2historyget) | **GET** /v2/history | List Api Events
*APIHistoryEAPApi* | [**getApiEvent**](docs/Api/APIHistoryEAPApi.md#getapievent) | **GET** /v2/opensearch/history/{event_id} | Get Api Event
*APIHistoryEAPApi* | [**getRequestBody**](docs/Api/APIHistoryEAPApi.md#getrequestbody) | **GET** /v2/opensearch/history/{event_id}/request | Get Request Body
*APIHistoryEAPApi* | [**getResponseBody**](docs/Api/APIHistoryEAPApi.md#getresponsebody) | **GET** /v2/opensearch/history/{event_id}/response | Get Response Body
*APIHistoryEAPApi* | [**listApiEvents**](docs/Api/APIHistoryEAPApi.md#listapievents) | **GET** /v2/opensearch/history | List Api Events
*APIKeysEAPApi* | [**createApiKey**](docs/Api/APIKeysEAPApi.md#createapikey) | **POST** /v2/api-key | Create Api Key
*APIKeysEAPApi* | [**deleteApiKey**](docs/Api/APIKeysEAPApi.md#deleteapikey) | **DELETE** /v2/api-key/{api_key_id} | Delete Api Key
*APIKeysEAPApi* | [**getApiKey**](docs/Api/APIKeysEAPApi.md#getapikey) | **GET** /v2/api-key/{api_key_id} | Get Api Key
*APIKeysEAPApi* | [**getApiKeyScope**](docs/Api/APIKeysEAPApi.md#getapikeyscope) | **GET** /v2/api-key/scope | Get Api Key Scope
*APIKeysEAPApi* | [**getEnvironmentApiKey**](docs/Api/APIKeysEAPApi.md#getenvironmentapikey) | **GET** /v2/api-key/{proj_id}/{env_id} | Get Environment Api Key
*APIKeysEAPApi* | [**listApiKeys**](docs/Api/APIKeysEAPApi.md#listapikeys) | **GET** /v2/api-key | List Api Keys
*APIKeysEAPApi* | [**rotateApiKey**](docs/Api/APIKeysEAPApi.md#rotateapikey) | **POST** /v2/api-key/{api_key_id}/rotate-secret | Rotate API Key
*AccessRequestsEAPApi* | [**approveAccessRequest**](docs/Api/AccessRequestsEAPApi.md#approveaccessrequest) | **PUT** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests/{access_request_id}/approve | Approve Access Request
*AccessRequestsEAPApi* | [**cancelAccessRequest**](docs/Api/AccessRequestsEAPApi.md#cancelaccessrequest) | **PUT** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests/{access_request_id}/cancel | Cancel Access Request
*AccessRequestsEAPApi* | [**createAccessRequest**](docs/Api/AccessRequestsEAPApi.md#createaccessrequest) | **POST** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests | Create Access Request
*AccessRequestsEAPApi* | [**denyAccessRequest**](docs/Api/AccessRequestsEAPApi.md#denyaccessrequest) | **PUT** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests/{access_request_id}/deny | Deny Access Request
*AccessRequestsEAPApi* | [**getAccessRequest**](docs/Api/AccessRequestsEAPApi.md#getaccessrequest) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests/{access_request_id} | Get Access Request
*AccessRequestsEAPApi* | [**listAccessRequests**](docs/Api/AccessRequestsEAPApi.md#listaccessrequests) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests | List Access Requests
*AccessRequestsEAPApi* | [**updateAccessRequestReviewer**](docs/Api/AccessRequestsEAPApi.md#updateaccessrequestreviewer) | **PATCH** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests/{access_request_id}/reviewer | Update Access Request Reviewer
*ActivityLogApi* | [**listActivityEventsV2ActivityGet**](docs/Api/ActivityLogApi.md#listactivityeventsv2activityget) | **GET** /v2/activity | List Activity Events
*ActivityLogApi* | [**listActivityTypesV2ActivityTypesGet**](docs/Api/ActivityLogApi.md#listactivitytypesv2activitytypesget) | **GET** /v2/activity/types | List Activity Types
*ActivityLogEAPApi* | [**listActivityEvents**](docs/Api/ActivityLogEAPApi.md#listactivityevents) | **GET** /v2/opensearch/activity | List Activity Events
*ActivityLogEAPApi* | [**listActivityTypes**](docs/Api/ActivityLogEAPApi.md#listactivitytypes) | **GET** /v2/opensearch/activity/types | List Activity Types
*AuditElementsDataEAPApi* | [**elementsListAuditLogs**](docs/Api/AuditElementsDataEAPApi.md#elementslistauditlogs) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/audit_logs | List audit logs
*AuditLogsApi* | [**getDetailedAuditLog**](docs/Api/AuditLogsApi.md#getdetailedauditlog) | **GET** /v2/pdps/{proj_id}/{env_id}/audit_logs/{log_id} | Get detailed audit log
*AuditLogsApi* | [**listAuditLogs**](docs/Api/AuditLogsApi.md#listauditlogs) | **GET** /v2/pdps/{proj_id}/{env_id}/audit_logs | List Audit Logs
*BulkOperationsApi* | [**bulkCreateOrReplaceRoles**](docs/Api/BulkOperationsApi.md#bulkcreateorreplaceroles) | **PUT** /v2/schema/{proj_id}/{env_id}/bulk/roles | Bulk Create Or Replace Roles
*BulkOperationsApi* | [**bulkCreateTenants**](docs/Api/BulkOperationsApi.md#bulkcreatetenants) | **POST** /v2/facts/{proj_id}/{env_id}/bulk/tenants | Bulk Create Tenants
*BulkOperationsApi* | [**bulkCreateUsers**](docs/Api/BulkOperationsApi.md#bulkcreateusers) | **POST** /v2/facts/{proj_id}/{env_id}/bulk/users | Bulk Create Users
*BulkOperationsApi* | [**bulkDeleteResourceInstances**](docs/Api/BulkOperationsApi.md#bulkdeleteresourceinstances) | **DELETE** /v2/facts/{proj_id}/{env_id}/bulk/resource_instances | Bulk Delete Resource Instances
*BulkOperationsApi* | [**bulkDeleteTenants**](docs/Api/BulkOperationsApi.md#bulkdeletetenants) | **DELETE** /v2/facts/{proj_id}/{env_id}/bulk/tenants | Bulk Delete Tenants
*BulkOperationsApi* | [**bulkDeleteUsers**](docs/Api/BulkOperationsApi.md#bulkdeleteusers) | **DELETE** /v2/facts/{proj_id}/{env_id}/bulk/users | Bulk Delete Users
*BulkOperationsApi* | [**bulkReplaceResourceInstances**](docs/Api/BulkOperationsApi.md#bulkreplaceresourceinstances) | **PUT** /v2/facts/{proj_id}/{env_id}/bulk/resource_instances | Bulk Replace Resource Instances
*BulkOperationsApi* | [**bulkReplaceUsers**](docs/Api/BulkOperationsApi.md#bulkreplaceusers) | **PUT** /v2/facts/{proj_id}/{env_id}/bulk/users | Bulk Replace Users
*ConditionSetRulesApi* | [**assignSetPermissions**](docs/Api/ConditionSetRulesApi.md#assignsetpermissions) | **POST** /v2/facts/{proj_id}/{env_id}/set_rules | Assign Set Permissions
*ConditionSetRulesApi* | [**listSetPermissions**](docs/Api/ConditionSetRulesApi.md#listsetpermissions) | **GET** /v2/facts/{proj_id}/{env_id}/set_rules | List Set Permissions
*ConditionSetRulesApi* | [**unassignSetPermissions**](docs/Api/ConditionSetRulesApi.md#unassignsetpermissions) | **DELETE** /v2/facts/{proj_id}/{env_id}/set_rules | Unassign Set Permissions
*ConditionSetsApi* | [**createConditionSet**](docs/Api/ConditionSetsApi.md#createconditionset) | **POST** /v2/schema/{proj_id}/{env_id}/condition_sets | Create Condition Set
*ConditionSetsApi* | [**deleteConditionSet**](docs/Api/ConditionSetsApi.md#deleteconditionset) | **DELETE** /v2/schema/{proj_id}/{env_id}/condition_sets/{condition_set_id} | Delete Condition Set
*ConditionSetsApi* | [**getConditionSet**](docs/Api/ConditionSetsApi.md#getconditionset) | **GET** /v2/schema/{proj_id}/{env_id}/condition_sets/{condition_set_id} | Get Condition Set
*ConditionSetsApi* | [**getConditionSetAncestors**](docs/Api/ConditionSetsApi.md#getconditionsetancestors) | **GET** /v2/schema/{proj_id}/{env_id}/condition_sets/{condition_set_id}/ancestors | Get Condition Set Ancestors
*ConditionSetsApi* | [**getConditionSetDescendants**](docs/Api/ConditionSetsApi.md#getconditionsetdescendants) | **GET** /v2/schema/{proj_id}/{env_id}/condition_sets/{condition_set_id}/descendants | Get Condition Set Descendants
*ConditionSetsApi* | [**listConditionSets**](docs/Api/ConditionSetsApi.md#listconditionsets) | **GET** /v2/schema/{proj_id}/{env_id}/condition_sets | List Condition Sets
*ConditionSetsApi* | [**updateConditionSet**](docs/Api/ConditionSetsApi.md#updateconditionset) | **PATCH** /v2/schema/{proj_id}/{env_id}/condition_sets/{condition_set_id} | Update Condition Set
*ElementsConfigsEAPApi* | [**createElementsConfig**](docs/Api/ElementsConfigsEAPApi.md#createelementsconfig) | **POST** /v2/elements/{proj_id}/{env_id}/config | Create Elements Config
*ElementsConfigsEAPApi* | [**deleteElementsConfig**](docs/Api/ElementsConfigsEAPApi.md#deleteelementsconfig) | **DELETE** /v2/elements/{proj_id}/{env_id}/{elements_config_id} | Delete Elements Config
*ElementsConfigsEAPApi* | [**getElementsConfig**](docs/Api/ElementsConfigsEAPApi.md#getelementsconfig) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id} | Get Elements Config
*ElementsConfigsEAPApi* | [**getElementsConfigRuntime**](docs/Api/ElementsConfigsEAPApi.md#getelementsconfigruntime) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/runtime | Get Elements Config Runtime
*ElementsConfigsEAPApi* | [**listElementsConfigs**](docs/Api/ElementsConfigsEAPApi.md#listelementsconfigs) | **GET** /v2/elements/{proj_id}/{env_id}/config | List Elements Configs
*ElementsConfigsEAPApi* | [**updateElementsConfig**](docs/Api/ElementsConfigsEAPApi.md#updateelementsconfig) | **PATCH** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id} | Update Elements Config
*EmailConfigurationsApi* | [**createOrUpdateEmailConfiguration**](docs/Api/EmailConfigurationsApi.md#createorupdateemailconfiguration) | **POST** /v2/facts/{proj_id}/{env_id}/email_configurations | Create Or Update Email Configuration
*EmailConfigurationsApi* | [**getEmailConfiguration**](docs/Api/EmailConfigurationsApi.md#getemailconfiguration) | **GET** /v2/facts/{proj_id}/{env_id}/email_configurations | Get Email Configuration
*EmailConfigurationsApi* | [**sendTestEmail**](docs/Api/EmailConfigurationsApi.md#sendtestemail) | **POST** /v2/facts/{proj_id}/{env_id}/email_configurations/send_test_email | Send Test Email
*EmailTemplatesApi* | [**getTemplateByType**](docs/Api/EmailTemplatesApi.md#gettemplatebytype) | **GET** /v2/facts/{proj_id}/{env_id}/email_templates/{template_type} | Get Template By Type
*EmailTemplatesApi* | [**listTemplates**](docs/Api/EmailTemplatesApi.md#listtemplates) | **GET** /v2/facts/{proj_id}/{env_id}/email_templates/ | List Templates
*EmailTemplatesApi* | [**sendTestEmailByType**](docs/Api/EmailTemplatesApi.md#sendtestemailbytype) | **POST** /v2/facts/{proj_id}/{env_id}/email_templates/{template_type}/send_test_email | Send Test Email By Type
*EmailTemplatesApi* | [**updateTemplateByType**](docs/Api/EmailTemplatesApi.md#updatetemplatebytype) | **POST** /v2/facts/{proj_id}/{env_id}/email_templates/{template_type} | Update Template By Type
*EnvironmentsApi* | [**copyEnvironment**](docs/Api/EnvironmentsApi.md#copyenvironment) | **POST** /v2/projects/{proj_id}/envs/{env_id}/copy | Copy Environment
*EnvironmentsApi* | [**createEnvironment**](docs/Api/EnvironmentsApi.md#createenvironment) | **POST** /v2/projects/{proj_id}/envs | Create Environment
*EnvironmentsApi* | [**deleteEnvironment**](docs/Api/EnvironmentsApi.md#deleteenvironment) | **DELETE** /v2/projects/{proj_id}/envs/{env_id} | Delete Environment
*EnvironmentsApi* | [**getEnvironment**](docs/Api/EnvironmentsApi.md#getenvironment) | **GET** /v2/projects/{proj_id}/envs/{env_id} | Get Environment
*EnvironmentsApi* | [**listEnvironments**](docs/Api/EnvironmentsApi.md#listenvironments) | **GET** /v2/projects/{proj_id}/envs | List Environments
*EnvironmentsApi* | [**statsEnvironments**](docs/Api/EnvironmentsApi.md#statsenvironments) | **GET** /v2/projects/{proj_id}/envs/{env_id}/stats | Stats Environments
*EnvironmentsApi* | [**testJwksByUrl**](docs/Api/EnvironmentsApi.md#testjwksbyurl) | **POST** /v2/projects/{proj_id}/envs/{env_id}/test_jwks | Test Jwks By Url
*EnvironmentsApi* | [**updateEnvironment**](docs/Api/EnvironmentsApi.md#updateenvironment) | **PATCH** /v2/projects/{proj_id}/envs/{env_id} | Update Environment
*GroupsUpcomingFeatureApi* | [**assignRoleToGroup**](docs/Api/GroupsUpcomingFeatureApi.md#assignroletogroup) | **POST** /v2/facts/{proj_id}/{env_id}/groups/{group_instance_key}/roles | Assign Role To Group
*GroupsUpcomingFeatureApi* | [**assignUserToGroup**](docs/Api/GroupsUpcomingFeatureApi.md#assignusertogroup) | **PUT** /v2/facts/{proj_id}/{env_id}/groups/{group_instance_key}/users/{user_id} | Assign User To Group
*GroupsUpcomingFeatureApi* | [**createGroup**](docs/Api/GroupsUpcomingFeatureApi.md#creategroup) | **POST** /v2/facts/{proj_id}/{env_id}/groups | Create Group
*GroupsUpcomingFeatureApi* | [**deleteGroup**](docs/Api/GroupsUpcomingFeatureApi.md#deletegroup) | **DELETE** /v2/facts/{proj_id}/{env_id}/groups/{group_instance_key} | Delete Group
*GroupsUpcomingFeatureApi* | [**getGroup**](docs/Api/GroupsUpcomingFeatureApi.md#getgroup) | **GET** /v2/facts/{proj_id}/{env_id}/groups/{group_instance_key} | Get Group
*GroupsUpcomingFeatureApi* | [**listGroup**](docs/Api/GroupsUpcomingFeatureApi.md#listgroup) | **GET** /v2/facts/{proj_id}/{env_id}/groups | List Group
*GroupsUpcomingFeatureApi* | [**removeRoleFromGroup**](docs/Api/GroupsUpcomingFeatureApi.md#removerolefromgroup) | **DELETE** /v2/facts/{proj_id}/{env_id}/groups/{group_instance_key}/roles | Remove Role From Group
*GroupsUpcomingFeatureApi* | [**removeUserFromGroup**](docs/Api/GroupsUpcomingFeatureApi.md#removeuserfromgroup) | **DELETE** /v2/facts/{proj_id}/{env_id}/groups/{group_instance_key}/users/{user_id} | Remove User From Group
*ImplicitGrantsApi* | [**createImplicitGrant**](docs/Api/ImplicitGrantsApi.md#createimplicitgrant) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/implicit_grants | Create Implicit Grant
*ImplicitGrantsApi* | [**deleteImplicitGrant**](docs/Api/ImplicitGrantsApi.md#deleteimplicitgrant) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/implicit_grants | Delete Implicit Grant
*ImplicitGrantsApi* | [**updateImplicitGrantsConditions**](docs/Api/ImplicitGrantsApi.md#updateimplicitgrantsconditions) | **PUT** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/implicit_grants/conditions | Update Implicit Grants Conditions
*InvitesEAPApi* | [**cancelInvite**](docs/Api/InvitesEAPApi.md#cancelinvite) | **DELETE** /v2/orgs/{org_id}/invites/{invite_id} | Cancel Invite
*InvitesEAPApi* | [**inviteMembersToOrganization**](docs/Api/InvitesEAPApi.md#invitememberstoorganization) | **POST** /v2/orgs/{org_id}/invites | Invite Members To Organization
*InvitesEAPApi* | [**listOrganizationInvites**](docs/Api/InvitesEAPApi.md#listorganizationinvites) | **GET** /v2/orgs/{org_id}/invites | List Organization Invites
*MembersApi* | [**createOrganizationMembers**](docs/Api/MembersApi.md#createorganizationmembers) | **POST** /v2/members | Invite new members (EAP)
*MembersApi* | [**deleteOrganizationMember**](docs/Api/MembersApi.md#deleteorganizationmember) | **DELETE** /v2/members/{member_id} | Remove member (EAP)
*MembersApi* | [**deleteOrganizationPermissions**](docs/Api/MembersApi.md#deleteorganizationpermissions) | **DELETE** /v2/members | Remove permission (EAP)
*MembersApi* | [**getAuthenticatedMember**](docs/Api/MembersApi.md#getauthenticatedmember) | **GET** /v2/members/me | Get the authenticated account member
*MembersApi* | [**getOrganizationMember**](docs/Api/MembersApi.md#getorganizationmember) | **GET** /v2/members/{member_id} | Get Organization Member
*MembersApi* | [**listOrganizationMembers**](docs/Api/MembersApi.md#listorganizationmembers) | **GET** /v2/members | List Organization Members
*MembersApi* | [**updateOrganizationMember**](docs/Api/MembersApi.md#updateorganizationmember) | **PATCH** /v2/members/{member_id} | Edit members (EAP)
*OPALDataEAPApi* | [**getAllData**](docs/Api/OPALDataEAPApi.md#getalldata) | **GET** /v2/internal/opal_data/{org_id}/{proj_id}/{env_id} | Get All Data
*OPALDataEAPApi* | [**getAllDataOptimized**](docs/Api/OPALDataEAPApi.md#getalldataoptimized) | **GET** /v2/internal/opal_data/{org_id}/{proj_id}/{env_id}/optimized | Get All Data Optimized
*OperationApprovalEAPApi* | [**approveOperationApproval**](docs/Api/OperationApprovalEAPApi.md#approveoperationapproval) | **PUT** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval/{operation_approval_id}/approve | Approve Operation Approval
*OperationApprovalEAPApi* | [**cancelOperationApproval**](docs/Api/OperationApprovalEAPApi.md#canceloperationapproval) | **PUT** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval/{operation_approval_id}/cancel | Cancel Operation Approval
*OperationApprovalEAPApi* | [**createOperationApproval**](docs/Api/OperationApprovalEAPApi.md#createoperationapproval) | **POST** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval | Create Operation Approval
*OperationApprovalEAPApi* | [**denyOperationApproval**](docs/Api/OperationApprovalEAPApi.md#denyoperationapproval) | **PUT** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval/{operation_approval_id}/deny | Deny Operation Approval
*OperationApprovalEAPApi* | [**getOperationApproval**](docs/Api/OperationApprovalEAPApi.md#getoperationapproval) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval/{operation_approval_id} | Get Operation Approval
*OperationApprovalEAPApi* | [**listOperationApprovals**](docs/Api/OperationApprovalEAPApi.md#listoperationapprovals) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval | List Operation Approvals
*OperationApprovalEAPApi* | [**updateOperationApprovalReviewer**](docs/Api/OperationApprovalEAPApi.md#updateoperationapprovalreviewer) | **PATCH** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval/{operation_approval_id}/reviewer | Update Operation Approval Reviewer
*OrganizationsApi* | [**createOrganization**](docs/Api/OrganizationsApi.md#createorganization) | **POST** /v2/orgs | Create Organization
*OrganizationsApi* | [**deleteOrganization**](docs/Api/OrganizationsApi.md#deleteorganization) | **DELETE** /v2/orgs/{org_id} | Delete Organization
*OrganizationsApi* | [**getActiveOrganization**](docs/Api/OrganizationsApi.md#getactiveorganization) | **GET** /v2/orgs/active/org | Get Active Organization
*OrganizationsApi* | [**getOrganization**](docs/Api/OrganizationsApi.md#getorganization) | **GET** /v2/orgs/{org_id} | Get Organization
*OrganizationsApi* | [**listOrganizations**](docs/Api/OrganizationsApi.md#listorganizations) | **GET** /v2/orgs | List Organizations
*OrganizationsApi* | [**statsOrganization**](docs/Api/OrganizationsApi.md#statsorganization) | **GET** /v2/orgs/{org_id}/stats | Stats Organization
*OrganizationsApi* | [**updateOrganization**](docs/Api/OrganizationsApi.md#updateorganization) | **PATCH** /v2/orgs/{org_id} | Update Organization
*PolicyDecisionPointsEAPApi* | [**disableDebugAuditLogs**](docs/Api/PolicyDecisionPointsEAPApi.md#disabledebugauditlogs) | **PUT** /v2/pdps/{proj_id}/{env_id}/configs/{pdp_id}/debug-audit-logs/disable | Disable debug audit logs
*PolicyDecisionPointsEAPApi* | [**enableDebugAuditLogs**](docs/Api/PolicyDecisionPointsEAPApi.md#enabledebugauditlogs) | **PUT** /v2/pdps/{proj_id}/{env_id}/configs/{pdp_id}/debug-audit-logs/enable | Enable debug audit logs
*PolicyDecisionPointsEAPApi* | [**getPdpConfigValues**](docs/Api/PolicyDecisionPointsEAPApi.md#getpdpconfigvalues) | **GET** /v2/pdps/{proj_id}/{env_id}/configs/{pdp_id}/values | Get PDP configuration
*PolicyDecisionPointsEAPApi* | [**listPdpConfigs**](docs/Api/PolicyDecisionPointsEAPApi.md#listpdpconfigs) | **GET** /v2/pdps/{proj_id}/{env_id}/configs | List PDP configurations
*PolicyDecisionPointsEAPApi* | [**migrateShards**](docs/Api/PolicyDecisionPointsEAPApi.md#migrateshards) | **POST** /v2/pdps/{proj_id}/{env_id}/configs/migrate-shards | Migrate PDP Config number of shards
*PolicyDecisionPointsEAPApi* | [**rotatePdpApiKey**](docs/Api/PolicyDecisionPointsEAPApi.md#rotatepdpapikey) | **POST** /v2/pdps/{proj_id}/{env_id}/configs/{pdp_id}/rotate-api-key | Rotate PDP API Key
*PolicyGitRepositoriesEAPApi* | [**activatePolicyRepo**](docs/Api/PolicyGitRepositoriesEAPApi.md#activatepolicyrepo) | **PUT** /v2/projects/{proj_id}/repos/{repo_id}/activate | Activate Policy Repo
*PolicyGitRepositoriesEAPApi* | [**createPolicyRepo**](docs/Api/PolicyGitRepositoriesEAPApi.md#createpolicyrepo) | **POST** /v2/projects/{proj_id}/repos | Create Policy Repo
*PolicyGitRepositoriesEAPApi* | [**deletePolicyRepo**](docs/Api/PolicyGitRepositoriesEAPApi.md#deletepolicyrepo) | **DELETE** /v2/projects/{proj_id}/repos/{repo_id} | Delete Policy Repo
*PolicyGitRepositoriesEAPApi* | [**disableActivePolicyRepo**](docs/Api/PolicyGitRepositoriesEAPApi.md#disableactivepolicyrepo) | **PUT** /v2/projects/{proj_id}/repos/disable | Disable Active Policy Repo
*PolicyGitRepositoriesEAPApi* | [**getActivePolicyRepo**](docs/Api/PolicyGitRepositoriesEAPApi.md#getactivepolicyrepo) | **GET** /v2/projects/{proj_id}/repos/active | Get Active Policy Repo
*PolicyGitRepositoriesEAPApi* | [**getPolicyRepo**](docs/Api/PolicyGitRepositoriesEAPApi.md#getpolicyrepo) | **GET** /v2/projects/{proj_id}/repos/{repo_id} | Get Policy Repo
*PolicyGitRepositoriesEAPApi* | [**listPolicyRepos**](docs/Api/PolicyGitRepositoriesEAPApi.md#listpolicyrepos) | **GET** /v2/projects/{proj_id}/repos | List Policy Repos
*ProjectsApi* | [**createProject**](docs/Api/ProjectsApi.md#createproject) | **POST** /v2/projects | Create Project
*ProjectsApi* | [**deleteProject**](docs/Api/ProjectsApi.md#deleteproject) | **DELETE** /v2/projects/{proj_id} | Delete Project
*ProjectsApi* | [**getProject**](docs/Api/ProjectsApi.md#getproject) | **GET** /v2/projects/{proj_id} | Get Project
*ProjectsApi* | [**listProjects**](docs/Api/ProjectsApi.md#listprojects) | **GET** /v2/projects | List Projects
*ProjectsApi* | [**updateProject**](docs/Api/ProjectsApi.md#updateproject) | **PATCH** /v2/projects/{proj_id} | Update Project
*ProxyConfigApi* | [**createProxyConfig**](docs/Api/ProxyConfigApi.md#createproxyconfig) | **POST** /v2/facts/{proj_id}/{env_id}/proxy_configs | Create Proxy Config
*ProxyConfigApi* | [**deleteProxyConfig**](docs/Api/ProxyConfigApi.md#deleteproxyconfig) | **DELETE** /v2/facts/{proj_id}/{env_id}/proxy_configs/{proxy_config_id} | Delete Proxy Config
*ProxyConfigApi* | [**getProxyConfig**](docs/Api/ProxyConfigApi.md#getproxyconfig) | **GET** /v2/facts/{proj_id}/{env_id}/proxy_configs/{proxy_config_id} | Get Proxy Config
*ProxyConfigApi* | [**listProxyConfigs**](docs/Api/ProxyConfigApi.md#listproxyconfigs) | **GET** /v2/facts/{proj_id}/{env_id}/proxy_configs | List Proxy Configs
*ProxyConfigApi* | [**updateProxyConfig**](docs/Api/ProxyConfigApi.md#updateproxyconfig) | **PATCH** /v2/facts/{proj_id}/{env_id}/proxy_configs/{proxy_config_id} | Update Proxy Config
*RelationshipTuplesApi* | [**bulkCreateRelationshipTuples**](docs/Api/RelationshipTuplesApi.md#bulkcreaterelationshiptuples) | **POST** /v2/facts/{proj_id}/{env_id}/relationship_tuples/bulk | Bulk create relationship tuples(EAP)
*RelationshipTuplesApi* | [**bulkDeleteRelationshipTuples**](docs/Api/RelationshipTuplesApi.md#bulkdeleterelationshiptuples) | **DELETE** /v2/facts/{proj_id}/{env_id}/relationship_tuples/bulk | Bulk Delete Relationship Tuples
*RelationshipTuplesApi* | [**createRelationshipTuple**](docs/Api/RelationshipTuplesApi.md#createrelationshiptuple) | **POST** /v2/facts/{proj_id}/{env_id}/relationship_tuples | Create Relationship Tuple
*RelationshipTuplesApi* | [**deleteRelationshipTuple**](docs/Api/RelationshipTuplesApi.md#deleterelationshiptuple) | **DELETE** /v2/facts/{proj_id}/{env_id}/relationship_tuples | Delete Relationship Tuple
*RelationshipTuplesApi* | [**listRelationshipTuples**](docs/Api/RelationshipTuplesApi.md#listrelationshiptuples) | **GET** /v2/facts/{proj_id}/{env_id}/relationship_tuples | List Relationship Tuples
*ResourceActionGroupsApi* | [**createResourceActionGroup**](docs/Api/ResourceActionGroupsApi.md#createresourceactiongroup) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/action_groups | Create Resource Action Group
*ResourceActionGroupsApi* | [**deleteResourceActionGroup**](docs/Api/ResourceActionGroupsApi.md#deleteresourceactiongroup) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/action_groups/{action_group_id} | Delete Resource Action Group
*ResourceActionGroupsApi* | [**getResourceActionGroup**](docs/Api/ResourceActionGroupsApi.md#getresourceactiongroup) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/action_groups/{action_group_id} | Get Resource Action Group
*ResourceActionGroupsApi* | [**listResourceActionGroups**](docs/Api/ResourceActionGroupsApi.md#listresourceactiongroups) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/action_groups | List Resource Action Groups
*ResourceActionGroupsApi* | [**updateResourceActionGroup**](docs/Api/ResourceActionGroupsApi.md#updateresourceactiongroup) | **PATCH** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/action_groups/{action_group_id} | Update Resource Action Group
*ResourceActionsApi* | [**createResourceAction**](docs/Api/ResourceActionsApi.md#createresourceaction) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions | Create Resource Action
*ResourceActionsApi* | [**deleteResourceAction**](docs/Api/ResourceActionsApi.md#deleteresourceaction) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions/{action_id} | Delete Resource Action
*ResourceActionsApi* | [**getResourceAction**](docs/Api/ResourceActionsApi.md#getresourceaction) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions/{action_id} | Get Resource Action
*ResourceActionsApi* | [**listResourceActions**](docs/Api/ResourceActionsApi.md#listresourceactions) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions | List Resource Actions
*ResourceActionsApi* | [**updateResourceAction**](docs/Api/ResourceActionsApi.md#updateresourceaction) | **PATCH** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions/{action_id} | Update Resource Action
*ResourceAttributesApi* | [**createResourceAttribute**](docs/Api/ResourceAttributesApi.md#createresourceattribute) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes | Create Resource Attribute
*ResourceAttributesApi* | [**deleteResourceAttribute**](docs/Api/ResourceAttributesApi.md#deleteresourceattribute) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes/{attribute_id} | Delete Resource Attribute
*ResourceAttributesApi* | [**getResourceAttribute**](docs/Api/ResourceAttributesApi.md#getresourceattribute) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes/{attribute_id} | Get Resource Attribute
*ResourceAttributesApi* | [**listResourceAttributes**](docs/Api/ResourceAttributesApi.md#listresourceattributes) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes | List Resource Attributes
*ResourceAttributesApi* | [**updateResourceAttribute**](docs/Api/ResourceAttributesApi.md#updateresourceattribute) | **PATCH** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes/{attribute_id} | Update Resource Attribute
*ResourceInstancesApi* | [**createResourceInstance**](docs/Api/ResourceInstancesApi.md#createresourceinstance) | **POST** /v2/facts/{proj_id}/{env_id}/resource_instances | Create Resource Instance
*ResourceInstancesApi* | [**deleteResourceInstance**](docs/Api/ResourceInstancesApi.md#deleteresourceinstance) | **DELETE** /v2/facts/{proj_id}/{env_id}/resource_instances/{instance_id} | Delete Resource Instance
*ResourceInstancesApi* | [**getResourceInstance**](docs/Api/ResourceInstancesApi.md#getresourceinstance) | **GET** /v2/facts/{proj_id}/{env_id}/resource_instances/{instance_id} | Get Resource Instance
*ResourceInstancesApi* | [**listResourceInstances**](docs/Api/ResourceInstancesApi.md#listresourceinstances) | **GET** /v2/facts/{proj_id}/{env_id}/resource_instances | List Resource Instances
*ResourceInstancesApi* | [**updateResourceInstance**](docs/Api/ResourceInstancesApi.md#updateresourceinstance) | **PATCH** /v2/facts/{proj_id}/{env_id}/resource_instances/{instance_id} | Update Resource Instance
*ResourceRelationsApi* | [**createResourceRelation**](docs/Api/ResourceRelationsApi.md#createresourcerelation) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/relations | Create Resource Relation
*ResourceRelationsApi* | [**deleteResourceRelation**](docs/Api/ResourceRelationsApi.md#deleteresourcerelation) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/relations/{relation_id} | Delete Resource Relation
*ResourceRelationsApi* | [**getResourceRelation**](docs/Api/ResourceRelationsApi.md#getresourcerelation) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/relations/{relation_id} | Get Resource Relation
*ResourceRelationsApi* | [**listResourceRelations**](docs/Api/ResourceRelationsApi.md#listresourcerelations) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/relations | List Resource Relations
*ResourceRolesApi* | [**assignPermissionsToResourceRole**](docs/Api/ResourceRolesApi.md#assignpermissionstoresourcerole) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/permissions | Assign Permissions to Role
*ResourceRolesApi* | [**createResourceRole**](docs/Api/ResourceRolesApi.md#createresourcerole) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles | Create Resource Role
*ResourceRolesApi* | [**deleteResourceRole**](docs/Api/ResourceRolesApi.md#deleteresourcerole) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id} | Delete Resource Role
*ResourceRolesApi* | [**getResourceRole**](docs/Api/ResourceRolesApi.md#getresourcerole) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id} | Get Resource Role
*ResourceRolesApi* | [**getResourceRoleAncestors**](docs/Api/ResourceRolesApi.md#getresourceroleancestors) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/ancestors | Get Resource Role Ancestors
*ResourceRolesApi* | [**getResourceRoleDescendants**](docs/Api/ResourceRolesApi.md#getresourceroledescendants) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/descendants | Get Resource Role Descendants
*ResourceRolesApi* | [**listResourceRoles**](docs/Api/ResourceRolesApi.md#listresourceroles) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles | List Resource Roles
*ResourceRolesApi* | [**removePermissionsFromResourceRole**](docs/Api/ResourceRolesApi.md#removepermissionsfromresourcerole) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/permissions | Remove Permissions from Role
*ResourceRolesApi* | [**updateResourceRole**](docs/Api/ResourceRolesApi.md#updateresourcerole) | **PATCH** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id} | Update Resource Role
*ResourcesApi* | [**createResource**](docs/Api/ResourcesApi.md#createresource) | **POST** /v2/schema/{proj_id}/{env_id}/resources | Create Resource
*ResourcesApi* | [**deleteResource**](docs/Api/ResourcesApi.md#deleteresource) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id} | Delete Resource
*ResourcesApi* | [**getResource**](docs/Api/ResourcesApi.md#getresource) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id} | Get Resource
*ResourcesApi* | [**listResources**](docs/Api/ResourcesApi.md#listresources) | **GET** /v2/schema/{proj_id}/{env_id}/resources | List Resources
*ResourcesApi* | [**replaceResource**](docs/Api/ResourcesApi.md#replaceresource) | **PUT** /v2/schema/{proj_id}/{env_id}/resources/{resource_id} | Replace Resource
*ResourcesApi* | [**updateResource**](docs/Api/ResourcesApi.md#updateresource) | **PATCH** /v2/schema/{proj_id}/{env_id}/resources/{resource_id} | Update Resource
*RoleAssignmentsApi* | [**assignRole**](docs/Api/RoleAssignmentsApi.md#assignrole) | **POST** /v2/facts/{proj_id}/{env_id}/role_assignments | Assign Role
*RoleAssignmentsApi* | [**bulkAssignRole**](docs/Api/RoleAssignmentsApi.md#bulkassignrole) | **POST** /v2/facts/{proj_id}/{env_id}/role_assignments/bulk | Bulk create role assignments(EAP)
*RoleAssignmentsApi* | [**bulkUnassignRole**](docs/Api/RoleAssignmentsApi.md#bulkunassignrole) | **DELETE** /v2/facts/{proj_id}/{env_id}/role_assignments/bulk | Bulk Unassign Role
*RoleAssignmentsApi* | [**listRoleAssignments**](docs/Api/RoleAssignmentsApi.md#listroleassignments) | **GET** /v2/facts/{proj_id}/{env_id}/role_assignments | List Role Assignments
*RoleAssignmentsApi* | [**unassignRole**](docs/Api/RoleAssignmentsApi.md#unassignrole) | **DELETE** /v2/facts/{proj_id}/{env_id}/role_assignments | Unassign Role
*RolesApi* | [**assignPermissionsToRole**](docs/Api/RolesApi.md#assignpermissionstorole) | **POST** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/permissions | Assign Permissions To Role
*RolesApi* | [**createRole**](docs/Api/RolesApi.md#createrole) | **POST** /v2/schema/{proj_id}/{env_id}/roles | Create Role
*RolesApi* | [**deleteRole**](docs/Api/RolesApi.md#deleterole) | **DELETE** /v2/schema/{proj_id}/{env_id}/roles/{role_id} | Delete Role
*RolesApi* | [**getRole**](docs/Api/RolesApi.md#getrole) | **GET** /v2/schema/{proj_id}/{env_id}/roles/{role_id} | Get Role
*RolesApi* | [**getRoleAncestors**](docs/Api/RolesApi.md#getroleancestors) | **GET** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/ancestors | Get Role Ancestors
*RolesApi* | [**getRoleDescendants**](docs/Api/RolesApi.md#getroledescendants) | **GET** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/descendants | Get Role Descendants
*RolesApi* | [**listRoles**](docs/Api/RolesApi.md#listroles) | **GET** /v2/schema/{proj_id}/{env_id}/roles | List Roles
*RolesApi* | [**removePermissionsFromRole**](docs/Api/RolesApi.md#removepermissionsfromrole) | **DELETE** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/permissions | Remove Permissions From Role
*RolesApi* | [**updateRole**](docs/Api/RolesApi.md#updaterole) | **PATCH** /v2/schema/{proj_id}/{env_id}/roles/{role_id} | Update Role
*ScopeConfigurationsApi* | [**getScopeConfig**](docs/Api/ScopeConfigurationsApi.md#getscopeconfig) | **GET** /v2/projects/{proj_id}/{env_id}/opal_scope | Get Scope Config
*ScopeConfigurationsApi* | [**resetScopeConfig**](docs/Api/ScopeConfigurationsApi.md#resetscopeconfig) | **DELETE** /v2/projects/{proj_id}/{env_id}/opal_scope | Reset Scope Config
*ScopeConfigurationsApi* | [**setScopeConfig**](docs/Api/ScopeConfigurationsApi.md#setscopeconfig) | **PUT** /v2/projects/{proj_id}/{env_id}/opal_scope | Set Scope Config
*TenantsApi* | [**addUserToTenant**](docs/Api/TenantsApi.md#addusertotenant) | **POST** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id}/users | Add User To Tenant
*TenantsApi* | [**createTenant**](docs/Api/TenantsApi.md#createtenant) | **POST** /v2/facts/{proj_id}/{env_id}/tenants | Create Tenant
*TenantsApi* | [**deleteTenant**](docs/Api/TenantsApi.md#deletetenant) | **DELETE** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id} | Delete Tenant
*TenantsApi* | [**deleteTenantUser**](docs/Api/TenantsApi.md#deletetenantuser) | **DELETE** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id}/users/{user_id} | Delete Tenant User
*TenantsApi* | [**getTenant**](docs/Api/TenantsApi.md#gettenant) | **GET** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id} | Get Tenant
*TenantsApi* | [**listTenantUsers**](docs/Api/TenantsApi.md#listtenantusers) | **GET** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id}/users | List Tenant Users
*TenantsApi* | [**listTenants**](docs/Api/TenantsApi.md#listtenants) | **GET** /v2/facts/{proj_id}/{env_id}/tenants | List Tenants
*TenantsApi* | [**updateTenant**](docs/Api/TenantsApi.md#updatetenant) | **PATCH** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id} | Update Tenant
*UserAttributesApi* | [**createUserAttribute**](docs/Api/UserAttributesApi.md#createuserattribute) | **POST** /v2/schema/{proj_id}/{env_id}/users/attributes | Create User Attribute
*UserAttributesApi* | [**deleteUserAttribute**](docs/Api/UserAttributesApi.md#deleteuserattribute) | **DELETE** /v2/schema/{proj_id}/{env_id}/users/attributes/{attribute_id} | Delete User Attribute
*UserAttributesApi* | [**getUserAttribute**](docs/Api/UserAttributesApi.md#getuserattribute) | **GET** /v2/schema/{proj_id}/{env_id}/users/attributes/{attribute_id} | Get User Attribute
*UserAttributesApi* | [**listUserAttributes**](docs/Api/UserAttributesApi.md#listuserattributes) | **GET** /v2/schema/{proj_id}/{env_id}/users/attributes | List User Attributes
*UserAttributesApi* | [**updateUserAttribute**](docs/Api/UserAttributesApi.md#updateuserattribute) | **PATCH** /v2/schema/{proj_id}/{env_id}/users/attributes/{attribute_id} | Update User Attribute
*UserInvitesApi* | [**approveUserInvite**](docs/Api/UserInvitesApi.md#approveuserinvite) | **POST** /v2/facts/{proj_id}/{env_id}/user_invites/{user_invite_id}/approve | Approve User Invite
*UserInvitesApi* | [**createUserInvite**](docs/Api/UserInvitesApi.md#createuserinvite) | **POST** /v2/facts/{proj_id}/{env_id}/user_invites | Create User Invite
*UserInvitesApi* | [**deleteUserInvite**](docs/Api/UserInvitesApi.md#deleteuserinvite) | **DELETE** /v2/facts/{proj_id}/{env_id}/user_invites/{user_invite_id} | Delete User Invite
*UserInvitesApi* | [**getUserInvite**](docs/Api/UserInvitesApi.md#getuserinvite) | **GET** /v2/facts/{proj_id}/{env_id}/user_invites/{user_invite_id} | Get User Invite
*UserInvitesApi* | [**listUserInvites**](docs/Api/UserInvitesApi.md#listuserinvites) | **GET** /v2/facts/{proj_id}/{env_id}/user_invites | List User Invites
*UserInvitesApi* | [**updateUserInvite**](docs/Api/UserInvitesApi.md#updateuserinvite) | **PATCH** /v2/facts/{proj_id}/{env_id}/user_invites/{user_invite_id} | Update User Invite
*UsersApi* | [**assignRoleToUser**](docs/Api/UsersApi.md#assignroletouser) | **POST** /v2/facts/{proj_id}/{env_id}/users/{user_id}/roles | Assign Role To User
*UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /v2/facts/{proj_id}/{env_id}/users | Create User
*UsersApi* | [**deleteUser**](docs/Api/UsersApi.md#deleteuser) | **DELETE** /v2/facts/{proj_id}/{env_id}/users/{user_id} | Delete User
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /v2/facts/{proj_id}/{env_id}/users/{user_id} | Get User
*UsersApi* | [**listUsers**](docs/Api/UsersApi.md#listusers) | **GET** /v2/facts/{proj_id}/{env_id}/users | List Users
*UsersApi* | [**replaceUser**](docs/Api/UsersApi.md#replaceuser) | **PUT** /v2/facts/{proj_id}/{env_id}/users/{user_id} | Replace User
*UsersApi* | [**unassignRoleFromUser**](docs/Api/UsersApi.md#unassignrolefromuser) | **DELETE** /v2/facts/{proj_id}/{env_id}/users/{user_id}/roles | Unassign Role From User
*UsersApi* | [**updateUser**](docs/Api/UsersApi.md#updateuser) | **PATCH** /v2/facts/{proj_id}/{env_id}/users/{user_id} | Update User
*UsersElementsDataEAPApi* | [**elementsAssignRoleToUser**](docs/Api/UsersElementsDataEAPApi.md#elementsassignroletouser) | **POST** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users/{user_id}/roles | Assign role to user
*UsersElementsDataEAPApi* | [**elementsCreateUser**](docs/Api/UsersElementsDataEAPApi.md#elementscreateuser) | **POST** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users | Create user
*UsersElementsDataEAPApi* | [**elementsDeleteUser**](docs/Api/UsersElementsDataEAPApi.md#elementsdeleteuser) | **DELETE** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users/{user_id} | Delete user
*UsersElementsDataEAPApi* | [**elementsListRoles**](docs/Api/UsersElementsDataEAPApi.md#elementslistroles) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/roles | List roles
*UsersElementsDataEAPApi* | [**elementsListUsers**](docs/Api/UsersElementsDataEAPApi.md#elementslistusers) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users | List users
*UsersElementsDataEAPApi* | [**elementsUnassignRoleFromUser**](docs/Api/UsersElementsDataEAPApi.md#elementsunassignrolefromuser) | **DELETE** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users/{user_id}/roles | Unassign role from user
*UsersElementsDataEAPApi* | [**setConfigActive**](docs/Api/UsersElementsDataEAPApi.md#setconfigactive) | **POST** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/active | Set Config Active

## Models

- [APIHistoryEventFullRead](docs/Model/APIHistoryEventFullRead.md)
- [APIHistoryEventRead](docs/Model/APIHistoryEventRead.md)
- [APIKeyCreate](docs/Model/APIKeyCreate.md)
- [APIKeyOwnerType](docs/Model/APIKeyOwnerType.md)
- [APIKeyRead](docs/Model/APIKeyRead.md)
- [APIKeyScopeRead](docs/Model/APIKeyScopeRead.md)
- [AVPEngineDecisionLog](docs/Model/AVPEngineDecisionLog.md)
- [AccessRequestApproved](docs/Model/AccessRequestApproved.md)
- [AccessRequestCanceled](docs/Model/AccessRequestCanceled.md)
- [AccessRequestCreateDetails](docs/Model/AccessRequestCreateDetails.md)
- [AccessRequestDenied](docs/Model/AccessRequestDenied.md)
- [AccessRequestDetails](docs/Model/AccessRequestDetails.md)
- [AccessRequestRead](docs/Model/AccessRequestRead.md)
- [AccessRequestReview](docs/Model/AccessRequestReview.md)
- [AccessRequestReviewDeny](docs/Model/AccessRequestReviewDeny.md)
- [AccessRequestUserCreate](docs/Model/AccessRequestUserCreate.md)
- [ActionBlockEditable](docs/Model/ActionBlockEditable.md)
- [ActionBlockRead](docs/Model/ActionBlockRead.md)
- [ActionObj](docs/Model/ActionObj.md)
- [ActivityDetails](docs/Model/ActivityDetails.md)
- [ActivityDetailsList](docs/Model/ActivityDetailsList.md)
- [ActivityDetailsObject](docs/Model/ActivityDetailsObject.md)
- [ActivityDetailsObjectData](docs/Model/ActivityDetailsObjectData.md)
- [ActivityLogEventRead](docs/Model/ActivityLogEventRead.md)
- [AddRolePermissions](docs/Model/AddRolePermissions.md)
- [ApproveMessage](docs/Model/ApproveMessage.md)
- [AttributeBlockEditable](docs/Model/AttributeBlockEditable.md)
- [AttributeBlockRead](docs/Model/AttributeBlockRead.md)
- [AttributeType](docs/Model/AttributeType.md)
- [AuditLogModel](docs/Model/AuditLogModel.md)
- [AuditLogObjectsModel](docs/Model/AuditLogObjectsModel.md)
- [AuditLogSortKey](docs/Model/AuditLogSortKey.md)
- [AuthMechanism](docs/Model/AuthMechanism.md)
- [BillingTier](docs/Model/BillingTier.md)
- [BulkRoleAssignmentReport](docs/Model/BulkRoleAssignmentReport.md)
- [BulkRoleUnAssignmentReport](docs/Model/BulkRoleUnAssignmentReport.md)
- [ConditionSetCreate](docs/Model/ConditionSetCreate.md)
- [ConditionSetData](docs/Model/ConditionSetData.md)
- [ConditionSetRead](docs/Model/ConditionSetRead.md)
- [ConditionSetRuleCreate](docs/Model/ConditionSetRuleCreate.md)
- [ConditionSetRuleRead](docs/Model/ConditionSetRuleRead.md)
- [ConditionSetRuleRemove](docs/Model/ConditionSetRuleRemove.md)
- [ConditionSetType](docs/Model/ConditionSetType.md)
- [ConditionSetUpdate](docs/Model/ConditionSetUpdate.md)
- [Data](docs/Model/Data.md)
- [DataSourceConfig](docs/Model/DataSourceConfig.md)
- [DataSourceEntryWithPollingInterval](docs/Model/DataSourceEntryWithPollingInterval.md)
- [DerivedRole](docs/Model/DerivedRole.md)
- [DerivedRoleBlockEdit](docs/Model/DerivedRoleBlockEdit.md)
- [DerivedRoleBlockRead](docs/Model/DerivedRoleBlockRead.md)
- [DerivedRoleRule](docs/Model/DerivedRoleRule.md)
- [DerivedRoleRuleCreate](docs/Model/DerivedRoleRuleCreate.md)
- [DerivedRoleRuleDelete](docs/Model/DerivedRoleRuleDelete.md)
- [DerivedRoleRuleRead](docs/Model/DerivedRoleRuleRead.md)
- [DetailedAuditLogModel](docs/Model/DetailedAuditLogModel.md)
- [DummyEngineModel](docs/Model/DummyEngineModel.md)
- [ElementsConfigCreate](docs/Model/ElementsConfigCreate.md)
- [ElementsConfigRead](docs/Model/ElementsConfigRead.md)
- [ElementsConfigRuntimeRead](docs/Model/ElementsConfigRuntimeRead.md)
- [ElementsConfigUpdate](docs/Model/ElementsConfigUpdate.md)
- [ElementsPermissionLevel](docs/Model/ElementsPermissionLevel.md)
- [ElementsRoleRead](docs/Model/ElementsRoleRead.md)
- [ElementsType](docs/Model/ElementsType.md)
- [ElementsUserCreate](docs/Model/ElementsUserCreate.md)
- [ElementsUserInviteApprove](docs/Model/ElementsUserInviteApprove.md)
- [ElementsUserInviteCreate](docs/Model/ElementsUserInviteCreate.md)
- [ElementsUserInviteRead](docs/Model/ElementsUserInviteRead.md)
- [ElementsUserInviteUpdate](docs/Model/ElementsUserInviteUpdate.md)
- [ElementsUserRoleCreate](docs/Model/ElementsUserRoleCreate.md)
- [ElementsUserRoleRemove](docs/Model/ElementsUserRoleRemove.md)
- [EmailConfigurationCreate](docs/Model/EmailConfigurationCreate.md)
- [EmailConfigurationRead](docs/Model/EmailConfigurationRead.md)
- [EmailMessageKeys](docs/Model/EmailMessageKeys.md)
- [EmailTemplateMessage](docs/Model/EmailTemplateMessage.md)
- [EmailTemplateRead](docs/Model/EmailTemplateRead.md)
- [EmailTemplateType](docs/Model/EmailTemplateType.md)
- [EmailTemplateUpdate](docs/Model/EmailTemplateUpdate.md)
- [Engine](docs/Model/Engine.md)
- [EnvironmentCopy](docs/Model/EnvironmentCopy.md)
- [EnvironmentCopyConflictStrategy](docs/Model/EnvironmentCopyConflictStrategy.md)
- [EnvironmentCopyScope](docs/Model/EnvironmentCopyScope.md)
- [EnvironmentCopyScopeFilters](docs/Model/EnvironmentCopyScopeFilters.md)
- [EnvironmentCopyTarget](docs/Model/EnvironmentCopyTarget.md)
- [EnvironmentCreate](docs/Model/EnvironmentCreate.md)
- [EnvironmentObj](docs/Model/EnvironmentObj.md)
- [EnvironmentObject](docs/Model/EnvironmentObject.md)
- [EnvironmentRead](docs/Model/EnvironmentRead.md)
- [EnvironmentReadWithEmailConfig](docs/Model/EnvironmentReadWithEmailConfig.md)
- [EnvironmentStatistics](docs/Model/EnvironmentStatistics.md)
- [EnvironmentStats](docs/Model/EnvironmentStats.md)
- [EnvironmentUpdate](docs/Model/EnvironmentUpdate.md)
- [FailedInvite](docs/Model/FailedInvite.md)
- [FullData](docs/Model/FullData.md)
- [GroupAddRole](docs/Model/GroupAddRole.md)
- [GroupAssignUser](docs/Model/GroupAssignUser.md)
- [GroupCreate](docs/Model/GroupCreate.md)
- [GroupRead](docs/Model/GroupRead.md)
- [HTTPValidationError](docs/Model/HTTPValidationError.md)
- [HistoricalUsage](docs/Model/HistoricalUsage.md)
- [HttpMethods](docs/Model/HttpMethods.md)
- [IdentityRead](docs/Model/IdentityRead.md)
- [InviteCreate](docs/Model/InviteCreate.md)
- [InviteRead](docs/Model/InviteRead.md)
- [InviteStatus](docs/Model/InviteStatus.md)
- [JSONPatchAction](docs/Model/JSONPatchAction.md)
- [JwksConfig](docs/Model/JwksConfig.md)
- [JwksObj](docs/Model/JwksObj.md)
- [LimitedPaginatedResultAPIHistoryEventRead](docs/Model/LimitedPaginatedResultAPIHistoryEventRead.md)
- [LimitedPaginatedResultActivityLogEventRead](docs/Model/LimitedPaginatedResultActivityLogEventRead.md)
- [LimitedPaginatedResultAuditLogModel](docs/Model/LimitedPaginatedResultAuditLogModel.md)
- [MailgunEmailConfigurationCreate](docs/Model/MailgunEmailConfigurationCreate.md)
- [MailgunEmailConfigurationRead](docs/Model/MailgunEmailConfigurationRead.md)
- [MappingRule](docs/Model/MappingRule.md)
- [MappingRulesInnerValue](docs/Model/MappingRulesInnerValue.md)
- [MemberAccessLevel](docs/Model/MemberAccessLevel.md)
- [MemberAccessObj](docs/Model/MemberAccessObj.md)
- [Methods](docs/Model/Methods.md)
- [MonthlyUsage](docs/Model/MonthlyUsage.md)
- [MultiInviteResult](docs/Model/MultiInviteResult.md)
- [OPAEngineDecisionLog](docs/Model/OPAEngineDecisionLog.md)
- [OPALClient](docs/Model/OPALClient.md)
- [OPALCommon](docs/Model/OPALCommon.md)
- [OPALHttpFetcherConfig](docs/Model/OPALHttpFetcherConfig.md)
- [OPALUpdateCallback](docs/Model/OPALUpdateCallback.md)
- [OPALUpdateCallbackCallbacksInner](docs/Model/OPALUpdateCallbackCallbacksInner.md)
- [OPALabels](docs/Model/OPALabels.md)
- [OPAMetrics](docs/Model/OPAMetrics.md)
- [OnboardingStep](docs/Model/OnboardingStep.md)
- [OperationApprovalApproved](docs/Model/OperationApprovalApproved.md)
- [OperationApprovalCanceled](docs/Model/OperationApprovalCanceled.md)
- [OperationApprovalCreateDetails](docs/Model/OperationApprovalCreateDetails.md)
- [OperationApprovalDenied](docs/Model/OperationApprovalDenied.md)
- [OperationApprovalDetails](docs/Model/OperationApprovalDetails.md)
- [OperationApprovalList](docs/Model/OperationApprovalList.md)
- [OperationApprovalRead](docs/Model/OperationApprovalRead.md)
- [OperationApprovalReview](docs/Model/OperationApprovalReview.md)
- [OperationApprovalUserCreate](docs/Model/OperationApprovalUserCreate.md)
- [OrgMemberCreate](docs/Model/OrgMemberCreate.md)
- [OrgMemberRead](docs/Model/OrgMemberRead.md)
- [OrgMemberReadWithGrants](docs/Model/OrgMemberReadWithGrants.md)
- [OrgMemberRemovePermissions](docs/Model/OrgMemberRemovePermissions.md)
- [OrgMemberUpdate](docs/Model/OrgMemberUpdate.md)
- [OrganizationCreate](docs/Model/OrganizationCreate.md)
- [OrganizationObj](docs/Model/OrganizationObj.md)
- [OrganizationObject](docs/Model/OrganizationObject.md)
- [OrganizationRead](docs/Model/OrganizationRead.md)
- [OrganizationReadWithAPIKey](docs/Model/OrganizationReadWithAPIKey.md)
- [OrganizationStatistics](docs/Model/OrganizationStatistics.md)
- [OrganizationStats](docs/Model/OrganizationStats.md)
- [OrganizationUpdate](docs/Model/OrganizationUpdate.md)
- [PDPConfigRead](docs/Model/PDPConfigRead.md)
- [PDPContext](docs/Model/PDPContext.md)
- [PDPShardMigration](docs/Model/PDPShardMigration.md)
- [PaginatedResultAPIHistoryEventRead](docs/Model/PaginatedResultAPIHistoryEventRead.md)
- [PaginatedResultAPIKeyRead](docs/Model/PaginatedResultAPIKeyRead.md)
- [PaginatedResultAccessRequestRead](docs/Model/PaginatedResultAccessRequestRead.md)
- [PaginatedResultActivityLogEventRead](docs/Model/PaginatedResultActivityLogEventRead.md)
- [PaginatedResultConditionSetRead](docs/Model/PaginatedResultConditionSetRead.md)
- [PaginatedResultElementsConfigRead](docs/Model/PaginatedResultElementsConfigRead.md)
- [PaginatedResultElementsUserInviteRead](docs/Model/PaginatedResultElementsUserInviteRead.md)
- [PaginatedResultOperationApprovalList](docs/Model/PaginatedResultOperationApprovalList.md)
- [PaginatedResultRelationRead](docs/Model/PaginatedResultRelationRead.md)
- [PaginatedResultResourceInstanceRead](docs/Model/PaginatedResultResourceInstanceRead.md)
- [PaginatedResultResourceRead](docs/Model/PaginatedResultResourceRead.md)
- [PaginatedResultResourceRoleRead](docs/Model/PaginatedResultResourceRoleRead.md)
- [PaginatedResultRoleRead](docs/Model/PaginatedResultRoleRead.md)
- [PaginatedResultTenantRead](docs/Model/PaginatedResultTenantRead.md)
- [PaginatedResultUserRead](docs/Model/PaginatedResultUserRead.md)
- [ParentId](docs/Model/ParentId.md)
- [PdpConfigObj](docs/Model/PdpConfigObj.md)
- [PdpConfigObject](docs/Model/PdpConfigObject.md)
- [PdpValues](docs/Model/PdpValues.md)
- [Permission](docs/Model/Permission.md)
- [PermissionLevelRoleRead](docs/Model/PermissionLevelRoleRead.md)
- [PermitBackendSchemasSchemaDerivedRoleRuleDerivationSettings](docs/Model/PermitBackendSchemasSchemaDerivedRoleRuleDerivationSettings.md)
- [PermitBackendSchemasSchemaOpalDataDerivationSettings](docs/Model/PermitBackendSchemasSchemaOpalDataDerivationSettings.md)
- [PolicyRepoCreate](docs/Model/PolicyRepoCreate.md)
- [PolicyRepoRead](docs/Model/PolicyRepoRead.md)
- [PolicyRepoStatus](docs/Model/PolicyRepoStatus.md)
- [ProjectCreate](docs/Model/ProjectCreate.md)
- [ProjectObj](docs/Model/ProjectObj.md)
- [ProjectObject](docs/Model/ProjectObject.md)
- [ProjectRead](docs/Model/ProjectRead.md)
- [ProjectUpdate](docs/Model/ProjectUpdate.md)
- [ProxyConfigCreate](docs/Model/ProxyConfigCreate.md)
- [ProxyConfigRead](docs/Model/ProxyConfigRead.md)
- [ProxyConfigUpdate](docs/Model/ProxyConfigUpdate.md)
- [RawData](docs/Model/RawData.md)
- [RawData1](docs/Model/RawData1.md)
- [RelationBlockRead](docs/Model/RelationBlockRead.md)
- [RelationCreate](docs/Model/RelationCreate.md)
- [RelationRead](docs/Model/RelationRead.md)
- [RelationshipTupleBlockRead](docs/Model/RelationshipTupleBlockRead.md)
- [RelationshipTupleCreate](docs/Model/RelationshipTupleCreate.md)
- [RelationshipTupleCreateBulkOperation](docs/Model/RelationshipTupleCreateBulkOperation.md)
- [RelationshipTupleDelete](docs/Model/RelationshipTupleDelete.md)
- [RelationshipTupleDeleteBulkOperation](docs/Model/RelationshipTupleDeleteBulkOperation.md)
- [RelationshipTupleObj](docs/Model/RelationshipTupleObj.md)
- [RelationshipTupleRead](docs/Model/RelationshipTupleRead.md)
- [RemoteConfig](docs/Model/RemoteConfig.md)
- [RemoveRolePermissions](docs/Model/RemoveRolePermissions.md)
- [RequestStatus](docs/Model/RequestStatus.md)
- [RequestType](docs/Model/RequestType.md)
- [ResourceActionCreate](docs/Model/ResourceActionCreate.md)
- [ResourceActionGroupCreate](docs/Model/ResourceActionGroupCreate.md)
- [ResourceActionGroupRead](docs/Model/ResourceActionGroupRead.md)
- [ResourceActionGroupUpdate](docs/Model/ResourceActionGroupUpdate.md)
- [ResourceActionRead](docs/Model/ResourceActionRead.md)
- [ResourceActionUpdate](docs/Model/ResourceActionUpdate.md)
- [ResourceAttributeCreate](docs/Model/ResourceAttributeCreate.md)
- [ResourceAttributeRead](docs/Model/ResourceAttributeRead.md)
- [ResourceAttributeUpdate](docs/Model/ResourceAttributeUpdate.md)
- [ResourceAttributes](docs/Model/ResourceAttributes.md)
- [ResourceCreate](docs/Model/ResourceCreate.md)
- [ResourceId](docs/Model/ResourceId.md)
- [ResourceInstanceAttributeData](docs/Model/ResourceInstanceAttributeData.md)
- [ResourceInstanceBlockRead](docs/Model/ResourceInstanceBlockRead.md)
- [ResourceInstanceCreate](docs/Model/ResourceInstanceCreate.md)
- [ResourceInstanceCreateBulkOperation](docs/Model/ResourceInstanceCreateBulkOperation.md)
- [ResourceInstanceDeleteBulkOperation](docs/Model/ResourceInstanceDeleteBulkOperation.md)
- [ResourceInstanceRead](docs/Model/ResourceInstanceRead.md)
- [ResourceInstanceUpdate](docs/Model/ResourceInstanceUpdate.md)
- [ResourceRead](docs/Model/ResourceRead.md)
- [ResourceReplace](docs/Model/ResourceReplace.md)
- [ResourceRoleCreate](docs/Model/ResourceRoleCreate.md)
- [ResourceRoleList](docs/Model/ResourceRoleList.md)
- [ResourceRoleRead](docs/Model/ResourceRoleRead.md)
- [ResourceRoleUpdate](docs/Model/ResourceRoleUpdate.md)
- [ResourceTypeData](docs/Model/ResourceTypeData.md)
- [ResourceTypeObj](docs/Model/ResourceTypeObj.md)
- [ResourceUpdate](docs/Model/ResourceUpdate.md)
- [ResponseElementsCreateUserV2ElementsProjIdEnvIdConfigElementsConfigIdDataUsersPost](docs/Model/ResponseElementsCreateUserV2ElementsProjIdEnvIdConfigElementsConfigIdDataUsersPost.md)
- [ResponseListConditionSetsV2SchemaProjIdEnvIdConditionSetsGet](docs/Model/ResponseListConditionSetsV2SchemaProjIdEnvIdConditionSetsGet.md)
- [ResponseListElementsConfigsV2ElementsProjIdEnvIdConfigGet](docs/Model/ResponseListElementsConfigsV2ElementsProjIdEnvIdConfigGet.md)
- [ResponseListResourceInstancesV2FactsProjIdEnvIdResourceInstancesGet](docs/Model/ResponseListResourceInstancesV2FactsProjIdEnvIdResourceInstancesGet.md)
- [ResponseListResourcesV2SchemaProjIdEnvIdResourcesGet](docs/Model/ResponseListResourcesV2SchemaProjIdEnvIdResourcesGet.md)
- [ResponseListRoleAssignmentsV2FactsProjIdEnvIdRoleAssignmentsGet](docs/Model/ResponseListRoleAssignmentsV2FactsProjIdEnvIdRoleAssignmentsGet.md)
- [ResponseListRolesV2SchemaProjIdEnvIdRolesGet](docs/Model/ResponseListRolesV2SchemaProjIdEnvIdRolesGet.md)
- [ResponseListTenantsV2FactsProjIdEnvIdTenantsGet](docs/Model/ResponseListTenantsV2FactsProjIdEnvIdTenantsGet.md)
- [RoleAssignmentCreate](docs/Model/RoleAssignmentCreate.md)
- [RoleAssignmentDetailedRead](docs/Model/RoleAssignmentDetailedRead.md)
- [RoleAssignmentRead](docs/Model/RoleAssignmentRead.md)
- [RoleAssignmentRemove](docs/Model/RoleAssignmentRemove.md)
- [RoleAssignmentResourceInstance](docs/Model/RoleAssignmentResourceInstance.md)
- [RoleAssignmentRole](docs/Model/RoleAssignmentRole.md)
- [RoleAssignmentTenant](docs/Model/RoleAssignmentTenant.md)
- [RoleAssignmentUser](docs/Model/RoleAssignmentUser.md)
- [RoleBlockEditable](docs/Model/RoleBlockEditable.md)
- [RoleCreate](docs/Model/RoleCreate.md)
- [RoleCreateBulk](docs/Model/RoleCreateBulk.md)
- [RoleCreateBulkOperation](docs/Model/RoleCreateBulkOperation.md)
- [RoleCreateBulkOperationResult](docs/Model/RoleCreateBulkOperationResult.md)
- [RoleData](docs/Model/RoleData.md)
- [RoleList](docs/Model/RoleList.md)
- [RoleRead](docs/Model/RoleRead.md)
- [RoleUpdate](docs/Model/RoleUpdate.md)
- [Roles](docs/Model/Roles.md)
- [Roles1](docs/Model/Roles1.md)
- [SMTPEmailConfigurationCreate](docs/Model/SMTPEmailConfigurationCreate.md)
- [SMTPEmailConfigurationRead](docs/Model/SMTPEmailConfigurationRead.md)
- [SSHAuthData](docs/Model/SSHAuthData.md)
- [SSHAuthDataRead](docs/Model/SSHAuthDataRead.md)
- [ScopeConfigRead](docs/Model/ScopeConfigRead.md)
- [ScopeConfigSet](docs/Model/ScopeConfigSet.md)
- [SearchOperator](docs/Model/SearchOperator.md)
- [Secret](docs/Model/Secret.md)
- [Settings](docs/Model/Settings.md)
- [StrippedRelationBlockRead](docs/Model/StrippedRelationBlockRead.md)
- [TenantBlockRead](docs/Model/TenantBlockRead.md)
- [TenantCreate](docs/Model/TenantCreate.md)
- [TenantCreateBulkOperation](docs/Model/TenantCreateBulkOperation.md)
- [TenantData](docs/Model/TenantData.md)
- [TenantDeleteBulkOperation](docs/Model/TenantDeleteBulkOperation.md)
- [TenantObj](docs/Model/TenantObj.md)
- [TenantRead](docs/Model/TenantRead.md)
- [TenantUpdate](docs/Model/TenantUpdate.md)
- [UsageLimits](docs/Model/UsageLimits.md)
- [UserCreate](docs/Model/UserCreate.md)
- [UserCreateBulkOperation](docs/Model/UserCreateBulkOperation.md)
- [UserData](docs/Model/UserData.md)
- [UserDeleteBulkOperation](docs/Model/UserDeleteBulkOperation.md)
- [UserInTenant](docs/Model/UserInTenant.md)
- [UserInviteStatus](docs/Model/UserInviteStatus.md)
- [UserObj](docs/Model/UserObj.md)
- [UserRead](docs/Model/UserRead.md)
- [UserReplaceBulkOperation](docs/Model/UserReplaceBulkOperation.md)
- [UserResourceInstanceRole](docs/Model/UserResourceInstanceRole.md)
- [UserRole](docs/Model/UserRole.md)
- [UserRoleCreate](docs/Model/UserRoleCreate.md)
- [UserRoleRemove](docs/Model/UserRoleRemove.md)
- [UserStatus](docs/Model/UserStatus.md)
- [UserUpdate](docs/Model/UserUpdate.md)
- [ValidationError](docs/Model/ValidationError.md)
- [WebhookCreateWithElements](docs/Model/WebhookCreateWithElements.md)
- [WebhookRead](docs/Model/WebhookRead.md)
- [WebhookType](docs/Model/WebhookType.md)
- [WebhookUpdate](docs/Model/WebhookUpdate.md)

## Authorization

Authentication schemes defined for the API:
### HTTPBearer

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
    - Generator version: `7.7.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
