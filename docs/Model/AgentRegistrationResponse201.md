# AgentRegistrationResponse201

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique agent identifier (64-char SHA-256 hash of domain + email + tokenRequestorId) | 
**name** | **string** | Agent name | 
**domain** | **string** | Agent domain URL | 
**description** | **string** | Agent description | [optional] 
**contactEmail** | **string** | Contact email | [optional] 
**tokenRequestorId** | **string** | Unique token requestor identifier | 
**agentType** | **string** | Agent classification: &#39;trusted&#39; (commercially onboarded) or &#39;known&#39; (open-source/unverified)  Possible values: - trusted - known | 
**agentMetadata** | **map[string,string]** | Additional agent metadata | [optional] 
**isActive** | **bool** | Whether the agent is active | 
**createdAt** | [**\DateTime**](\DateTime.md) | Creation timestamp | 
**updatedAt** | [**\DateTime**](\DateTime.md) | Last update timestamp | 
**keys** | [**\CyberSource\Model\AgentRegistrationResponse201Keys[]**](AgentRegistrationResponse201Keys.md) | List of keys associated with the agent | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


