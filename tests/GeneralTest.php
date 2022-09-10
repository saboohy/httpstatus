<?php declare(strict_types=1);

namespace Saboohy\HttpStatus\Tests
{
    use PHPUnit\Framework\TestCase;
    use Saboohy\HttpStatus\{
        Client,
        Info,
        Message,
        Redirect,
        Server,
        Success
    };

    final class GeneralTest extends TestCase
    {
        public function testDefault(): void
        {
            $this->assertSame(
                Message::get(0),
                "Status Not Found"
            );
        }

        public function testInfoStatus(): void
        {
            $this->assertSame(Info::CONTINUE, 100);
            $this->assertSame(Info::SWITCHING_PROTOCOLS, 101);
            $this->assertSame(Info::PROCESSING, 102);
            $this->assertSame(Info::EARLY_HINTS, 103);
            
            $this->assertSame(
                Message::get(Info::CONTINUE),
                "Continue"
            );

            $this->assertSame(
                Message::get(Info::SWITCHING_PROTOCOLS),
                "Switching Protocols"
            );

            $this->assertSame(
                Message::get(Info::PROCESSING),
                "Processing"
            );

            $this->assertSame(
                Message::get(Info::EARLY_HINTS),
                "Early Hints"
            );
        }

        public function testSuccessStatus(): void
        {
            $this->assertSame(Success::OK, 200);
            $this->assertSame(Success::CREATED, 201);
            $this->assertSame(Success::ACCEPTED, 202);
            $this->assertSame(Success::NON_AUTHORITATIVE_INFORMATION, 203);
            $this->assertSame(Success::NO_CONTENT, 204);
            $this->assertSame(Success::RESET_CONTENT, 205);
            $this->assertSame(Success::PARTIAL_CONTENT, 206);
            $this->assertSame(Success::MULTI_STATUS, 207);
            $this->assertSame(Success::ALREADY_REPORTED, 208);
            $this->assertSame(Success::IM_USED, 226);

            $this->assertSame(
                Message::get(Success::OK),
                "OK"
            );

            $this->assertSame(
                Message::get(Success::CREATED),
                "Created"
            );

            $this->assertSame(
                Message::get(Success::ACCEPTED),
                "Accepted"
            );

            $this->assertSame(
                Message::get(Success::NON_AUTHORITATIVE_INFORMATION),
                "Non-Authoritative Information"
            );

            $this->assertSame(
                Message::get(Success::NO_CONTENT),
                "No Content"
            );

            $this->assertSame(
                Message::get(Success::RESET_CONTENT),
                "Reset Content"
            );

            $this->assertSame(
                Message::get(Success::PARTIAL_CONTENT),
                "Partial Content"
            );

            $this->assertSame(
                Message::get(Success::MULTI_STATUS),
                "Multi-Status"
            );

            $this->assertSame(
                Message::get(Success::ALREADY_REPORTED),
                "Already Reported"
            );

            $this->assertSame(
                Message::get(Success::IM_USED),
                "IM Used"
            );
        }

        public function testClientStatus(): void
        {
            $this->assertSame(Client::BAD_REQUEST, 400);
            $this->assertSame(Client::UNAUTHORIZED, 401);
            $this->assertSame(Client::FORBIDDEN, 403);
            $this->assertSame(Client::NOT_FOUND, 404);
            $this->assertSame(Client::METHOD_NOT_ALLOWED, 405);
            $this->assertSame(Client::NOT_ACCEPTABLE, 406);
            $this->assertSame(Client::PROXY_AUTHENTICATION_REQUIRED, 407);
            $this->assertSame(Client::REQUEST_TIMEOUT, 408);
            $this->assertSame(Client::CONFLICT, 409);
            $this->assertSame(Client::GONE, 410);
            $this->assertSame(Client::LENGTH_REQUIRED, 411);
            $this->assertSame(Client::PRECONDITION_FAILED, 412);
            $this->assertSame(Client::PAYLOAD_TOO_LARGE, 413);
            $this->assertSame(Client::URI_TOO_LONG, 414);
            $this->assertSame(Client::UNSUPPORTED_MEDIA_TYPE, 415);
            $this->assertSame(Client::RANGE_NOT_SATISFIABLE, 416);
            $this->assertSame(Client::EXPECTATION_FAILED, 417);
            $this->assertSame(Client::IM_A_TEAPOT, 418);
            $this->assertSame(Client::MISDIRECTED_REQUEST, 421);
            $this->assertSame(Client::UNPROCESSABLE_ENTITY, 422);
            $this->assertSame(Client::LOCKED, 423);
            $this->assertSame(Client::FAILED_DEPENDENCY, 424);
            $this->assertSame(Client::TOO_EARLY, 425);
            $this->assertSame(Client::UPGRADE_REQUIRED, 426);
            $this->assertSame(Client::PRECONDITION_REQUIRED, 428);
            $this->assertSame(Client::TOO_MANY_REQUESTS, 429);
            $this->assertSame(Client::REQUEST_HEADER_FIELDS_TOO_LARGE, 431);
            $this->assertSame(Client::UNAVAILABLE_FOR_LEGAL_REASONS, 451);
            $this->assertSame(Client::CLIENT_CLOSED_REQUEST, 499);

            $this->assertSame(
                Message::get(Client::BAD_REQUEST),
                "Bad Request"
            );

            $this->assertSame(
                Message::get(Client::UNAUTHORIZED),
                "Unauthorized"
            );

            $this->assertSame(
                Message::get(Client::FORBIDDEN),
                "Forbidden"
            );

            $this->assertSame(
                Message::get(Client::NOT_FOUND),
                "Not Found"
            );

            $this->assertSame(
                Message::get(Client::METHOD_NOT_ALLOWED),
                "Method Not Allowed"
            );

            $this->assertSame(
                Message::get(Client::NOT_ACCEPTABLE),
                "Not Acceptable"
            );

            $this->assertSame(
                Message::get(Client::PROXY_AUTHENTICATION_REQUIRED),
                "Proxy Authentication Required"
            );

            $this->assertSame(
                Message::get(Client::REQUEST_TIMEOUT),
                "Request Timeout"
            );

            $this->assertSame(
                Message::get(Client::CONFLICT),
                "Conflict"
            );

            $this->assertSame(
                Message::get(Client::GONE),
                "Gone"
            );

            $this->assertSame(
                Message::get(Client::LENGTH_REQUIRED),
                "Length Required"
            );

            $this->assertSame(
                Message::get(Client::PRECONDITION_FAILED),
                "Precondition Failed"
            );

            $this->assertSame(
                Message::get(Client::PAYLOAD_TOO_LARGE),
                "Payload Too Large"
            );

            $this->assertSame(
                Message::get(Client::URI_TOO_LONG),
                "URI Too Long"
            );

            $this->assertSame(
                Message::get(Client::UNSUPPORTED_MEDIA_TYPE),
                "Unsupported Media Type"
            );

            $this->assertSame(
                Message::get(Client::RANGE_NOT_SATISFIABLE),
                "Range Not Satisfiable"
            );

            $this->assertSame(
                Message::get(Client::EXPECTATION_FAILED),
                "Expectation Failed"
            );

            $this->assertSame(
                Message::get(Client::IM_A_TEAPOT),
                "I'm a teapot"
            );

            $this->assertSame(
                Message::get(Client::MISDIRECTED_REQUEST),
                "Misdirected Request"
            );

            $this->assertSame(
                Message::get(Client::UNPROCESSABLE_ENTITY),
                "Unprocessable Entity"
            );

            $this->assertSame(
                Message::get(Client::LOCKED),
                "Locked"
            );

            $this->assertSame(
                Message::get(Client::FAILED_DEPENDENCY),
                "Failed Dependency"
            );

            $this->assertSame(
                Message::get(Client::TOO_EARLY),
                "Too Early"
            );

            $this->assertSame(
                Message::get(Client::UPGRADE_REQUIRED),
                "Upgrade Required"
            );

            $this->assertSame(
                Message::get(Client::PRECONDITION_REQUIRED),
                "Precondition Required"
            );

            $this->assertSame(
                Message::get(Client::TOO_MANY_REQUESTS),
                "Too Many Requests"
            );

            $this->assertSame(
                Message::get(Client::REQUEST_HEADER_FIELDS_TOO_LARGE),
                "Request Header Fields Too Large"
            );

            $this->assertSame(
                Message::get(Client::UNAVAILABLE_FOR_LEGAL_REASONS),
                "Unavailable For Legal Reasons"
            );

            $this->assertSame(
                Message::get(Client::CLIENT_CLOSED_REQUEST),
                "Client Closed Request"
            );
        }

        public function testServerStatus(): void
        {
            $this->assertSame(Server::INTERNAL_SERVER_ERROR, 500);
            $this->assertSame(Server::NOT_IMPLEMENTED, 501);
            $this->assertSame(Server::BAD_GATEWAY, 502);
            $this->assertSame(Server::SERVICE_UNAVAILABLE, 503);
            $this->assertSame(Server::GATEWAY_TIMEOUT, 504);
            $this->assertSame(Server::HTTP_VERSION_NOT_SUPPORTED, 505);
            $this->assertSame(Server::VARIANT_ALSO_NEGOTIATES, 506);
            $this->assertSame(Server::INSUFFICIENT_STORAGE, 507);
            $this->assertSame(Server::LOOP_DETECTED, 508);
            $this->assertSame(Server::NOT_EXTENDED, 510);
            $this->assertSame(Server::NETWORK_AUTHENTICATION_REQUIRED, 511);
            $this->assertSame(Server::NETWORK_READ_TIMEOUT_ERROR, 598);
            $this->assertSame(Server::NETWORK_CONNECT_TIMEOUT_ERROR, 599);

            $this->assertSame(
                Message::get(Server::INTERNAL_SERVER_ERROR),
                "Internal Server Error"
            );

            $this->assertSame(
                Message::get(Server::NOT_IMPLEMENTED),
                "Not Implemented"
            );

            $this->assertSame(
                Message::get(Server::BAD_GATEWAY),
                "Bad Gateway"
            );

            $this->assertSame(
                Message::get(Server::SERVICE_UNAVAILABLE),
                "Service Unavailable"
            );

            $this->assertSame(
                Message::get(Server::GATEWAY_TIMEOUT),
                "Gateway Timeout"
            );

            $this->assertSame(
                Message::get(Server::HTTP_VERSION_NOT_SUPPORTED),
                "HTTP Version Not Supported"
            );

            $this->assertSame(
                Message::get(Server::VARIANT_ALSO_NEGOTIATES),
                "Variant Also Negotiates"
            );

            $this->assertSame(
                Message::get(Server::INSUFFICIENT_STORAGE),
                "Insufficient Storage"
            );

            $this->assertSame(
                Message::get(Server::LOOP_DETECTED),
                "Loop Detected"
            );

            $this->assertSame(
                Message::get(Server::NOT_EXTENDED),
                "Not Extended"
            );

            $this->assertSame(
                Message::get(Server::NETWORK_AUTHENTICATION_REQUIRED),
                "Network Authentication Required"
            );

            $this->assertSame(
                Message::get(Server::NETWORK_READ_TIMEOUT_ERROR),
                "Network Read Timeout Error"
            );

            $this->assertSame(
                Message::get(Server::NETWORK_CONNECT_TIMEOUT_ERROR),
                "Network Connect Timeout Error"
            );
        }
    }
}