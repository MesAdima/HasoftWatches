'use strict';

app.service('UploadImg', ['$http', function ($http){
	var upload = UploadImg.upload({
  *url: 'server/upload/url', // upload.php script, node.js route, or servlet url
  *file: file,  // single file or an array of files (array is for html5 only)
  method: 'POST' or 'PUT'(html5), default POST,
  headers: {'Authorization': 'xxx'}, // only for html5
  fileName: 'doc.jpg' or ['1.jpg', '2.jpg', ...], // to modify the name of the file(s)
  /*
  file formData name ('Content-Disposition'), server side request file parameter name could be
  an array  of names for multiple files (html5). Default is 'file' */
  fileFormDataName: 'myFile' or ['file[0]', 'file[1]', ...],
  /*
  map of extra form data fields to send along with file. each field will be sent as a form field.
  The values are converted to json string or jsob blob or nested form depending on 'sendFieldsAs' option. */
  fields: {key: $scope.myValue, ...},
  /*
  default is 'json', sends each field as json string plain text content type, 'json-blob' sends object fields
  as a blob object with content type 'application/json', 'form' sends fields as nested form fields. see #784 */
  sendFieldsAs: json|json-blob|form,
  /* customize how data is added to the formData. See #40#issuecomment-28612000 for sample code. */
  formDataAppender: function(formData, key, val){},
  /*
  data will be sent as a separate form data field called "data".*/
  data: {}.
  withCredentials: true|false,
  ... and all other angular $http() options could be used here.
}).progress(function(evt) {
  console.log('progress: ' + parseInt(100.0 * evt.loaded / evt.total) + '% file :'+ evt.config.file.name);
}).success(function(data, status, headers, config) {
  // file is uploaded successfully
  console.log('file ' + config.file.name + 'is uploaded successfully. Response: ' + data);
}).error(function(data, status, headers, config) {
  // handle error
}).xhr(function(xhr){
  //access or attach event listeners to the underlying XMLHttpRequest
  xhr.upload.addEventListener(...)
});
/* return $http promise then,catch or finally.
Note that this promise does NOT have progress, abort or xhr functions */
var promise = upload.then(success, error, progress);
              upload.catch(errorCallback);
              upload.finally(callback, notifyCallback);

/* cancel/abort the upload in progress. */
upload.abort();

/* alternative way of uploading, send the file binary with the file's content-type.
   Could be used to upload files to CouchDB, imgur, etc... html5 FileReader is needed.
   It could also be used to enable progress for regualr angular $http() post/put requests.
*/
Upload.http({
  url: '/server/upload/url',
  headers : {
    'Content-Type': file.type
  },
  data: file
})

}]);