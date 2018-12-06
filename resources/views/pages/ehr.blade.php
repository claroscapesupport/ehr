@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
<p>This is the electronic health records page</p>

<script type="text/javascript">
    FHIR.oauth2.ready(function (fhirClient) {
        var patient = fhirClient.patient;
        $.when(patient.read())
            .done(function (p) {
                var name = p.name[0];
                var formattedName = name.given[0] + " " + name.family;
                $("#patientName").text(formattedName);
            });
        $.when(patient.api.search({type: "Observation", query: {code: '8302-2'}, count: 50}))
            .done(function (obsSearchResults) {
                obsSearchResults.data.entry.forEach(function (obs) {
                    var obsRow = "<tr><td>" + obs.resource.effectiveDateTime + "</td>" + "<td>" +
                        obs.resource.valueQuantity.value + obs.resource.valueQuantity.unit + "</td></tr>"
                    $("#obsTable").append(obsRow);
                });
            });
    });
</script>

<h2 id="patientName"></h2>
<table id="obsTable">
    <tr>
        <th>Date</th>
        <th>Value</th>
    </tr>
</table>





@endsection