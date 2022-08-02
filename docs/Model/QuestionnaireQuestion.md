# QuestionnaireQuestion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sequence_number** | **int** | The sequence number is used for ordering the questions. | [optional] 
**sequence_letter** | **string** | The optional sequence letter can be used to identify a sub-question, e.g. 9B. | [optional] 
**question** | [**\Swagger\Client\Model\Question**](Question.md) | The question to ask. | [optional] 
**required** | **bool** | Is a response to this question required? | [optional] 
**hidden** | **bool** | Should this question be hidden?  Hidden questions should be submitted with the   default response when posting a questionnaire response. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


