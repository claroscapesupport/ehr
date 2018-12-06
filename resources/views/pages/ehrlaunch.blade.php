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
        client_id: "c09a991f-97dc-4453-970e-ffd40b744d1d",
        scope: "launch online_access patient/*.read",   
        redirect_uri: "http://ehr.claroscape.com/ehr",   
        server: "https://fhir-open-api-dstu3.smarthealthit.org"
    });

    FHIR.oauth2.ready(function (fhirClient) {
    window.sessionStorage.smartServiceUrl = fhirClient.server.serviceUrl;
    window.sessionStorage.smartPatientId = fhirClient.patient.id;
    window.sessionStorage.smartAuthToken = fhirClient.server.auth.token;
    window.sessionStorage.smartAuthType = fhirClient.server.auth.type;
    }, function (err) {});
</script>

@endsection