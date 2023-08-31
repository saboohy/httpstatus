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
        

        public function testInfoStatus(): void
        {
            $this->assertSame(Info::CONTINUE->value, 100);
            $this->assertSame(Info::SWITCHING_PROTOCOLS->value, 101);
            $this->assertSame(Info::PROCESSING->value, 102);
            $this->assertSame(Info::EARLY_HINTS->value, 103);
            
            $this->assertSame(Info::CONTINUE->message(), "Continue");
            $this->assertSame(Info::SWITCHING_PROTOCOLS->message(), "Switching Protocols");
            $this->assertSame(Info::PROCESSING->message(), "Processing");
            $this->assertSame(Info::EARLY_HINTS->message(), "Early Hints");
        }

        public function testSuccessStatus(): void
        {
            $this->assertSame(Success::OK->value, 200);
            $this->assertSame(Success::CREATED->value, 201);
            $this->assertSame(Success::ACCEPTED->value, 202);
            $this->assertSame(Success::NON_AUTHORITATIVE_INFORMATION->value, 203);
            $this->assertSame(Success::NO_CONTENT->value, 204);
            $this->assertSame(Success::RESET_CONTENT->value, 205);
            $this->assertSame(Success::PARTIAL_CONTENT->value, 206);
            $this->assertSame(Success::MULTI_STATUS->value, 207);
            $this->assertSame(Success::ALREADY_REPORTED->value, 208);
            $this->assertSame(Success::IM_USED->value, 226);

            $this->assertSame(Success::OK->message(), "OK");
            $this->assertSame(Success::CREATED->message(), "Created");
            $this->assertSame(Success::ACCEPTED->message(), "Accepted");
            $this->assertSame(Success::NON_AUTHORITATIVE_INFORMATION->message(), "Non-Authoritative Information");
            $this->assertSame(Success::NO_CONTENT->message(), "No Content");
            $this->assertSame(Success::RESET_CONTENT->message(), "Reset Content");
            $this->assertSame(Success::PARTIAL_CONTENT->message(), "Partial Content");
            $this->assertSame(Success::MULTI_STATUS->message(), "Multi-Status");
            $this->assertSame(Success::ALREADY_REPORTED->message(), "Already Reported");
            $this->assertSame(Success::IM_USED->message(), "IM Used");
        }

        public function testClientStatus(): void
        {
            $this->assertSame(Client::BAD_REQUEST->value, 400);
            $this->assertSame(Client::UNAUTHORIZED->value, 401);
            $this->assertSame(Client::FORBIDDEN->value, 403);
            $this->assertSame(Client::NOT_FOUND->value, 404);
            $this->assertSame(Client::METHOD_NOT_ALLOWED->value, 405);
            $this->assertSame(Client::NOT_ACCEPTABLE->value, 406);
            $this->assertSame(Client::PROXY_AUTHENTICATION_REQUIRED->value, 407);
            $this->assertSame(Client::REQUEST_TIMEOUT->value, 408);
            $this->assertSame(Client::CONFLICT->value, 409);
            $this->assertSame(Client::GONE->value, 410);
            $this->assertSame(Client::LENGTH_REQUIRED->value, 411);
            $this->assertSame(Client::PRECONDITION_FAILED->value, 412);
            $this->assertSame(Client::PAYLOAD_TOO_LARGE->value, 413);
            $this->assertSame(Client::URI_TOO_LONG->value, 414);
            $this->assertSame(Client::UNSUPPORTED_MEDIA_TYPE->value, 415);
            $this->assertSame(Client::RANGE_NOT_SATISFIABLE->value, 416);
            $this->assertSame(Client::EXPECTATION_FAILED->value, 417);
            $this->assertSame(Client::IM_A_TEAPOT->value, 418);
            $this->assertSame(Client::MISDIRECTED_REQUEST->value, 421);
            $this->assertSame(Client::UNPROCESSABLE_ENTITY->value, 422);
            $this->assertSame(Client::LOCKED->value, 423);
            $this->assertSame(Client::FAILED_DEPENDENCY->value, 424);
            $this->assertSame(Client::TOO_EARLY->value, 425);
            $this->assertSame(Client::UPGRADE_REQUIRED->value, 426);
            $this->assertSame(Client::PRECONDITION_REQUIRED->value, 428);
            $this->assertSame(Client::TOO_MANY_REQUESTS->value, 429);
            $this->assertSame(Client::REQUEST_HEADER_FIELDS_TOO_LARGE->value, 431);
            $this->assertSame(Client::UNAVAILABLE_FOR_LEGAL_REASONS->value, 451);
            $this->assertSame(Client::CLIENT_CLOSED_REQUEST->value, 499);

            $this->assertSame(Client::BAD_REQUEST->message(), "Bad Request");
            $this->assertSame(Client::UNAUTHORIZED->message(), "Unauthorized");
            $this->assertSame(Client::FORBIDDEN->message(), "Forbidden");
            $this->assertSame(Client::NOT_FOUND->message(), "Not Found");
            $this->assertSame(Client::METHOD_NOT_ALLOWED->message(), "Method Not Allowed");
            $this->assertSame(Client::NOT_ACCEPTABLE->message(), "Not Acceptable");
            $this->assertSame(Client::PROXY_AUTHENTICATION_REQUIRED->message(), "Proxy Authentication Required");
            $this->assertSame(Client::REQUEST_TIMEOUT->message(), "Request Timeout");
            $this->assertSame(Client::CONFLICT->message(), "Conflict");
            $this->assertSame(Client::GONE->message(), "Gone");
            $this->assertSame(Client::LENGTH_REQUIRED->message(), "Length Required");
            $this->assertSame(Client::PRECONDITION_FAILED->message(), "Precondition Failed");
            $this->assertSame(Client::PAYLOAD_TOO_LARGE->message(), "Payload Too Large");
            $this->assertSame(Client::URI_TOO_LONG->message(), "URI Too Long");
            $this->assertSame(Client::UNSUPPORTED_MEDIA_TYPE->message(), "Unsupported Media Type");
            $this->assertSame(Client::RANGE_NOT_SATISFIABLE->message(), "Range Not Satisfiable");
            $this->assertSame(Client::EXPECTATION_FAILED->message(), "Expectation Failed");
            $this->assertSame(Client::IM_A_TEAPOT->message(), "I'm a teapot");
            $this->assertSame(Client::MISDIRECTED_REQUEST->message(), "Misdirected Request");
            $this->assertSame(Client::UNPROCESSABLE_ENTITY->message(), "Unprocessable Entity");
            $this->assertSame(Client::LOCKED->message(), "Locked");
            $this->assertSame(Client::FAILED_DEPENDENCY->message(), "Failed Dependency");
            $this->assertSame(Client::TOO_EARLY->message(), "Too Early");
            $this->assertSame(Client::UPGRADE_REQUIRED->message(), "Upgrade Required");
            $this->assertSame(Client::PRECONDITION_REQUIRED->message(), "Precondition Required");
            $this->assertSame(Client::TOO_MANY_REQUESTS->message(), "Too Many Requests");
            $this->assertSame(Client::REQUEST_HEADER_FIELDS_TOO_LARGE->message(), "Request Header Fields Too Large");
            $this->assertSame(Client::UNAVAILABLE_FOR_LEGAL_REASONS->message(), "Unavailable For Legal Reasons");
            $this->assertSame(Client::CLIENT_CLOSED_REQUEST->message(), "Client Closed Request");
        }

        public function testServerStatus(): void
        {
            $this->assertSame(Server::INTERNAL_SERVER_ERROR->value, 500);
            $this->assertSame(Server::NOT_IMPLEMENTED->value, 501);
            $this->assertSame(Server::BAD_GATEWAY->value, 502);
            $this->assertSame(Server::SERVICE_UNAVAILABLE->value, 503);
            $this->assertSame(Server::GATEWAY_TIMEOUT->value, 504);
            $this->assertSame(Server::HTTP_VERSION_NOT_SUPPORTED->value, 505);
            $this->assertSame(Server::VARIANT_ALSO_NEGOTIATES->value, 506);
            $this->assertSame(Server::INSUFFICIENT_STORAGE->value, 507);
            $this->assertSame(Server::LOOP_DETECTED->value, 508);
            $this->assertSame(Server::NOT_EXTENDED->value, 510);
            $this->assertSame(Server::NETWORK_AUTHENTICATION_REQUIRED->value, 511);
            $this->assertSame(Server::NETWORK_READ_TIMEOUT_ERROR->value, 598);
            $this->assertSame(Server::NETWORK_CONNECT_TIMEOUT_ERROR->value, 599);

            $this->assertSame(Server::INTERNAL_SERVER_ERROR->message(), "Internal Server Error");
            $this->assertSame(Server::NOT_IMPLEMENTED->message(), "Not Implemented");
            $this->assertSame(Server::BAD_GATEWAY->message(), "Bad Gateway");
            $this->assertSame(Server::SERVICE_UNAVAILABLE->message(), "Service Unavailable");
            $this->assertSame(Server::GATEWAY_TIMEOUT->message(), "Gateway Timeout");
            $this->assertSame(Server::HTTP_VERSION_NOT_SUPPORTED->message(), "HTTP Version Not Supported");
            $this->assertSame(Server::VARIANT_ALSO_NEGOTIATES->message(), "Variant Also Negotiates");
            $this->assertSame(Server::INSUFFICIENT_STORAGE->message(), "Insufficient Storage");
            $this->assertSame(Server::LOOP_DETECTED->message(), "Loop Detected");
            $this->assertSame(Server::NOT_EXTENDED->message(), "Not Extended");
            $this->assertSame(Server::NETWORK_AUTHENTICATION_REQUIRED->message(), "Network Authentication Required");
            $this->assertSame(Server::NETWORK_READ_TIMEOUT_ERROR->message(), "Network Read Timeout Error");
            $this->assertSame(Server::NETWORK_CONNECT_TIMEOUT_ERROR->message(), "Network Connect Timeout Error");
        }
    }
}