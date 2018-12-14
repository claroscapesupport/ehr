@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
<p>Launching....</p>


<div id="result"></div>
    document.getElementById("result").innerHTML = "Test value: " + sessionStorage.test


<script type="text/javascript">

        window.sessionStorage.test = "Test";

    FHIR.oauth2.ready(function (fhirClient) {
    window.sessionStorage.smartServiceUrl = fhirClient.server.serviceUrl;
    window.sessionStorage.smartPatientId = fhirClient.patient.id;
    window.sessionStorage.smartAuthToken = fhirClient.server.auth.token;
    window.sessionStorage.smartAuthType = fhirClient.server.auth.type;
    }, function (err) {console.log(err);});

    

    FHIR.oauth2.authorize({
        client:{
            client_id: "c09a991f-97dc-4453-970e-ffd40b744d1d",
            scope: "launch online_access patient/*.read",
            redirect_uri: "https://claroscape.herokuapp.com/ehr",
            server: "https://api-v5-stu3.hspconsortium.org/DCTest/data"
        },     
    });


</script>

@endsection