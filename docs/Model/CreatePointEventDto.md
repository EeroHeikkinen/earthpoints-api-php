# # CreatePointEventDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash_string** | **string** | The hash string is used to make sure each event will only result in points awarded once. It should be unique for each event and user, in such a way the same hashString will predictably get generated if the same event was sent again. For example, it could be the string \&quot;created-pledge-page\&quot; followed by the user&#39;s id in another system. |
**userid** | **string** | Already existing User UUID in the system. One of this or an email is required. | [optional]
**email** | **string** | Email to associate the points with. If an user with this email is not found, a new user will be created. One of this or an User UUID is required. | [optional]
**icon** | **string** | Icon to display in web interface (Font Awesome version 6.0.0) | [optional]
**verb** | **string** | The verb to display along with the point event in user interfaces. For example: \&quot;You connected Facebook\&quot; |
**platform** | **string** | Social platform (twitter, instagram, facebook) or other external platform where the event was awarded from |
**message** | **string** | Message to display to the user. |
**is_burn** | **bool** | For awarding points, set this to false. Set to true if you want to consume points instead of awarding them |
**points** | **float** | Number of points to award for this event. |
**timestamp** | **\DateTime** | For displaying to the user, the related time when the points were awarded. |
**metadata** | **object** | Any custom metadata |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
