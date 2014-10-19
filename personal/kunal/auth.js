	window.onload=function(){handleClientLoad()};
      	var clientId = '537070034987-020agbqi1kmgmrkooe165c15m2g9uc7f.apps.googleusercontent.com';
		var apiKey = 'AIzaSyCR-jzLRvXOj5oL1J5MSHB46bhZE3_7xQY';
		var scopes = 'https://www.googleapis.com/auth/drive';
      
      function handleClientLoad() {
        gapi.client.setApiKey(apiKey);
        window.setTimeout(checkAuth,1);
      }

      function checkAuth() {
        gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: true}, handleAuthResult);
      }

      function handleAuthResult(authResult) {
        var authorizeButton = document.getElementById('authorize-button');
        var submitButton = document.getElementById('submit-button');
        var fileIdTextArea = document.getElementById("fileid");
        if (authResult && !authResult.error) {
          authorizeButton.style.display = "none";
          submitButton.style.display = "initial";
          fileIdTextArea.disabled = false;
        } else {
          submitButton.style.display = "none";
          authorizeButton.style.display = "initial";
          fileIdTextArea.disabled = true;
          authorizeButton.onclick = handleAuthClick;
        }
      }

      function handleAuthClick(event) {
        gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: false}, handleAuthResult);
        return false;
      }
	  
