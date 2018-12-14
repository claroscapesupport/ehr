@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
<p>This is the electronic health records page up</p>


<script type="text/javascript">
    window.sessionStorage.test2 = "Test2";
    var fhirClient = FHIR.client({
    serviceUrl: window.sessionStorage.smartServiceUrl,
    patientId: window.sessionStorage.smartPatientId,
    auth: {
        token: window.sessionStorage.smartAuthToken,
        type: window.sessionStorage.smartAuthType
    }
    });
 
    var patient = fhirClient.patient;
</script>



<table id="obsTable">
    <tr>
        <th>Date</th>
        <th>Value</th>
    </tr>
</table>





@endsection