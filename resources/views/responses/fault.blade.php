<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>

<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
    <SOAP-ENV:Body>
        <SOAP-ENV:Fault>
            <faultcode>{!! $data['faultcode'] !!}</faultcode>
            <faultstring>{!! $data['faultstring'] !!}</faultstring>
        </SOAP-ENV:Fault>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>