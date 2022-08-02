# Question

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**question_code** | **string** | The question code uniquely identifies the question and is used when recording  responses | [optional] 
**question_type** | **string** | The type of question. | [optional] 
**data_type** | **string** | The data type for a basic question. | [optional] 
**prompt** | **string** | The text to use as the question prompt. | [optional] 
**max_length** | **int** | The (optional) maximum length of a free form or basic question. | [optional] 
**name** | **string** | The extended name of the question.  This might be used as help text. | [optional] 
**default_response** | **string** | The default response for this question.  For a ChooseOne or ChooseMany question the DefaultResponse  is never populated.  Instead use the Selected property on the list of choices to see which choices  should be selected by default.  The format of a basic question response depends on   the DataType of the question.    A Basic/Boolean question response should be \&quot;Y\&quot; (for yes/true) or \&quot;N\&quot; (for no/false).      A Basic/Date question response should be a valid date formatted as YYYYMMDD where YYYY is the year, MM is   the month (1-12), DD is the day of month (1-31).      A Basic/Integer question should have an integer response where the integer is formated as a string of   digits with no punctuation.  The integer should have no more digits than the maximum allowed length of   the question.      A Basic/Decimal response should contain a number with no more than 18 digits to the left of the decimal   point and no more than 6 digits to the right.  The number should be formatted as a string of digits with   a period (.) separating the integer and fractional values, e.g. 12312.52    A Basic/Text question should have a text response no longer than the maximum allowed length. | [optional] 
**choices** | [**\Swagger\Client\Model\QuestionChoice[]**](QuestionChoice.md) | The list of choices for a Choose One or Choose Many question, or an optional  list of suggested values for Basic questions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


