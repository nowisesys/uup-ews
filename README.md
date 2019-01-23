## UUP-EWS - Microsoft Exchange Web Service (EWS) Library

SOAP client library for communication with the EWS. Most code is auto-generated
from the WSDL/XSD downloaded from the Excahnge server. 

This project is not really unmaintained (missing usecase) and has only been tested
agains Exchange 2013, but made available in hope of being useful for someone!

### Notice: 

The WSDL and XSD-files bundled in config directory might need to be replaced to 
match the exchange server running in your organization. When updating WSDL, remember 
to also re-generate the PHP classes in source/UUP/Exchange/Types

### Update WSDL/XSD files:

Download service, message and types definitions from the exchange server by running:

```bash
for f in services.wsdl messages.xsd types.xsd; do \
  curl -v --ntlm --user user@example.com \
      https://server.example.com/ews/$f > config/$f
done
```

Append service definition at end of config/services.wsdl. Replace server.example.com
with the actual exchange server to provide default host:

```xml
<wsdl:service name="ExchangeServices">
  <wsdl:port name="ExchangeServicePort" binding="tns:ExchangeServiceBinding">
    <soap:address location="https://server.example.com/ews/exchange.asmx" />
  </wsdl:port>
</wsdl:service> 
```

### Update PHP classes:

1. Use the bundled script to generate PHP classes from WSDL. Requires suggested 
   composer package wsdl2phpgenerator to be installed first:

```bash
composer require wsdl2phpgenerator/wsdl2phpgenerator
php bin/generate.php
```

2. Download the CLI version of wsdl2phpgenerator, then generate the PHP classes
   from the WSDL file in the config directory:

```bash
php ~/wsdl2phpgenerator.phar -i config/services.wsdl \
    -o source/UUP/Exchange/Types -n "UUP\\Exchange\\Types" \
    --noIncludes --constructorNull --createAccessors
```

See documentation of wsdl2phpgenerator for more information:

* https://github.com/wsdl2phpgenerator/wsdl2phpgenerator
* https://github.com/wsdl2phpgenerator/wsdl2phpgenerator-cli

### Test:

A simple PHP script for testing connection and basic CRUD operations for calendar
events can be found in the bin directory:

```bash
php bin/client.php --user=user@example.com --pass=secret \
                   --host=exchange.example.com \
                   --find --start="2015-11-25" --end="2015-12-01"
```

```bash
php bin/client.php --user=user@example.com --pass=secret \
                   --host=exchange.example.com \
                   --add --start="2015-11-25" --end="2015-12-01" \
                   --title="TEST" --body="Some text..."
```

```bash
php bin/client.php --user=user@example.com --pass=secret \
                   --host=exchange.example.com \
                   --delete --id="AABCurZhAAA="
```

### Reference:

How to: [Create appointments and meetings by using EWS in Exchange 2013](https://msdn.microsoft.com/EN-US/library/office/dn495611%28v=exchg.150%29.aspx)
