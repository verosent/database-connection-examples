# Database Connection Examples for Verosent databases
A repository for collecting examples how to connect to Verosent's databases from external scripts.

## Requirements

1. You own a Game Server at [verosent.com](https://www.verosent.com) that allows you to create databases in the customer center
2. Create a database user via the customer center and make sure the `remote access` checkbox is checked, otherwise no connection will be possible.
3. Grant that database user access to a database via the customer center

## Enforced TLS connections

Connecting externally to Verosent's databases is only possible via the protocols `TLS 1.2` or `TLS 1.3`. For security reasons, we do not allow unencrypted external connections to our database servers.

## Verosent Certificate Authority

All of our database servers use certificates signed by our internal Certificate Authority, thus a connection to our database servers need to be validated with the chain file from our Certificate Authority. Even though it is possible to skip the certificate validation step in scripting/programming languages, we do not recommend to do so, otherwise the security factor of the connection will suffer.

The certificate chain is maintained in the [verosent/certificate-authority](https://github.com/verosent/certificate-authority) repository. You need the `chain.pem` file from that repository in order to use our script examples.

## Facing issues or having questions?

If you are not able to connect to our database servers or if you have any other questions, then do not hesitate to create an issue on [GitHub](https://github.com/verosent/database-connection-examples/issues), ask your question in our [community forums](https://forum.verosent.com), or open a support ticket in the customer center, in case you do not want to share confidential implementation details with third-parties.

## Contributing to this repository

You may open pull requests to provide more examples how to connect to our databases.
