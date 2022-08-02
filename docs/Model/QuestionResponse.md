# QuestionResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**question_code** | **string** | The question code identifies which question was answered. | [optional] 
**responses** | **string[]** | The responses are always formatted as strings.  A ChooseMany question should have a response for each   choice that was selected.  The responses should contain the Value from the selected choices.  A ChooseOne   question response should also be the Value from the selected choice.  Basic questions should have a single  response.  The format of a basic question response depends on the DataType of the question.    A Basic/Boolean question response should be \&quot;Y\&quot; (for yes/true) or \&quot;N\&quot; (for no/false).      A Basic/Date question response should be a valid date formatted as YYYYMMDD where YYYY is the year, MM is   the month (1-12), DD is the day of month (1-31).      A Basic/Integer question should have an integer response where the integer is formated as a string of   digits with no punctuation.  The integer should have no more digits than the maximum allowed length of   the question.      A Basic/Decimal response should contain a number with no more than 18 digits to the left of the decimal   point and no more than 6 digits to the right.  The number should be formatted as a string of digits with   a period (.) separating the integer and fractional values, e.g. 12312.52    A Basic/Text question should have a text response no longer than the maximum allowed length. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


