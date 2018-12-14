@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
<p>Launching....</p>

<script type="text/javascript">
//console.log(window.fhir);
for(var b in window) { 
  console.log(b); 
}
</script>

<script type="text/javascript">
    FHIR.oauth2.authorize({
        client:{
            client_id: "c09a991f-97dc-4453-970e-ffd40b744d1d",
            scope: "launch online_access patient/*.read",   
            redirect_uri: "https://claroscape.herokuapp.com/ehr",   
            server: "https://api-v5-stu3.hspconsortium.org/DCTest/data"
        },
        
    });

    FHIR.oauth2.ready(function (fhirClient) {
    window.sessionStorage.smartServiceUrl = fhirClient.server.serviceUrl;
    window.sessionStorage.smartPatientId = fhirClient.patient.id;
    window.sessionStorage.smartAuthToken = fhirClient.server.auth.token;
    window.sessionStorage.smartAuthType = fhirClient.server.auth.type;
    }, function (err) {});
</script>

@endsection