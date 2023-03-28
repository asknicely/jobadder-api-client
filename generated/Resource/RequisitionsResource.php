<?php

namespace AskNicely\JobAdder\Generated\Resource;

use AskNicely\JobAdder\Generated\QueryParam;
use AskNicely\JobAdder\Generated\Resource;

class RequisitionsResource extends Resource
{
    /**
     * @param array $parameters {
     *
     *     @var int $offset The index of the first entry to return from the resource collection
     *     @var int $limit The maximum number of entries to return. <br />
     *     @var array $requisitionId Requistion Id
     *     @var array $companyId Company Id
     *     @var array $status
     *     @var array $hiringManager.contactId
     *     @var string $hiringManager.name
     *     @var array $approver.contactId Find requisitions by approver contact id
     *     @var string $approver.name
     *     @var bool $approver.pending Find requisitions pending approval by contacts specified in approver.contactId
     *     @var array $userId User Id - search for requisitions by owner or associated recruiter
     *     @var array $ownerUserId User Id - search for requisitions by owner
     *     @var array $recruiterUserId User Id - search for requisitions by associated recruiters
     *     @var array $createdAt Search for jobs created at a specific date and time
     *     @var array $updatedAt Search for jobs updated at a specific date and time
     *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
     *     @var array $embed Linked resources to embed in the results
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\AskNicely\JobAdder\Generated\Model\RequisitionListRepresentation
     */
    public function findRequisitions($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('offset', null);
        $queryParam->setDefault('limit', null);
        $queryParam->setDefault('requisitionId', null);
        $queryParam->setDefault('companyId', null);
        $queryParam->setDefault('status', null);
        $queryParam->setDefault('hiringManager.contactId', null);
        $queryParam->setDefault('hiringManager.name', null);
        $queryParam->setDefault('approver.contactId', null);
        $queryParam->setDefault('approver.name', null);
        $queryParam->setDefault('approver.pending', null);
        $queryParam->setDefault('userId', null);
        $queryParam->setDefault('ownerUserId', null);
        $queryParam->setDefault('recruiterUserId', null);
        $queryParam->setDefault('createdAt', null);
        $queryParam->setDefault('updatedAt', null);
        $queryParam->setDefault('sort', null);
        $queryParam->setDefault('embed', null);
        $url     = '/v2/requisitions';
        $url     = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'AskNicely\\JobAdder\\Generated\\Model\\RequisitionListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param \AskNicely\JobAdder\Generated\Model\AddRequisitionCommand $body
     * @param array                                             $parameters List of parameters
     * @param string                                            $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\AskNicely\JobAdder\Generated\Model\RequisitionRepresentation
     */
    public function addRequisition(\AskNicely\JobAdder\Generated\Model\AddRequisitionCommand $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/requisitions';
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json'], 'Content-Type' => 'application/json'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($body, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('201' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'AskNicely\\JobAdder\\Generated\\Model\\RequisitionRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $requisitionId
     * @param array  $parameters    List of parameters
     * @param string $fetch         Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function deleteRequisition($requisitionId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/requisitions/{requisitionId}';
        $url        = str_replace('{requisitionId}', urlencode($requisitionId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();

        return $response;
    }

    /**
     * @param int    $requisitionId Requisition Id
     * @param array  $parameters    List of parameters
     * @param string $fetch         Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\AskNicely\JobAdder\Generated\Model\RequisitionRepresentation
     */
    public function getRequisition($requisitionId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/requisitions/{requisitionId}';
        $url        = str_replace('{requisitionId}', urlencode($requisitionId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'AskNicely\\JobAdder\\Generated\\Model\\RequisitionRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int                                                  $requisitionId
     * @param \AskNicely\JobAdder\Generated\Model\UpdateRequisitionCommand $body
     * @param array                                                $parameters    List of parameters
     * @param string                                               $fetch         Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function updateRequisition($requisitionId, \AskNicely\JobAdder\Generated\Model\UpdateRequisitionCommand $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/requisitions/{requisitionId}';
        $url        = str_replace('{requisitionId}', urlencode($requisitionId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json'], 'Content-Type' => 'application/json'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($body, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();

        return $response;
    }

    /**
     * @param int                                                   $requisitionId
     * @param \AskNicely\JobAdder\Generated\Model\ApproveRequisitionCommand $body
     * @param array                                                 $parameters    List of parameters
     * @param string                                                $fetch         Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function approveRequisition($requisitionId, \AskNicely\JobAdder\Generated\Model\ApproveRequisitionCommand $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/requisitions/{requisitionId}/approve';
        $url        = str_replace('{requisitionId}', urlencode($requisitionId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json'], 'Content-Type' => 'application/json'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($body, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();

        return $response;
    }

    /**
     * @param int    $requisitionId
     * @param string $attachmentType
     * @param array  $parameters     List of parameters
     * @param string $fetch          Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getLatestRequisitionAttachment($requisitionId, $attachmentType, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/requisitions/{requisitionId}/attachments/{attachmentType}';
        $url        = str_replace('{requisitionId}', urlencode($requisitionId), $url);
        $url        = str_replace('{attachmentType}', urlencode($attachmentType), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();

        return $response;
    }

    /**
     * @param int    $requisitionId
     * @param string $attachmentType
     * @param array  $parameters     {
     *
     *     @var  $fileData
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function addRequisitionAttachment($requisitionId, $attachmentType, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setRequired('fileData');
        $queryParam->setFormParameters(['fileData']);
        $url     = '/v2/requisitions/{requisitionId}/attachments/{attachmentType}';
        $url     = str_replace('{requisitionId}', urlencode($requisitionId), $url);
        $url     = str_replace('{attachmentType}', urlencode($attachmentType), $url);
        $url     = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();

        return $response;
    }

    /**
     * @param int   $requisitionId
     * @param array $parameters    {
     *
     *     @var int $offset
     *     @var int $limit
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\AskNicely\JobAdder\Generated\Model\RequisitionHistoryModel
     */
    public function getRequisitionApprovalHistory($requisitionId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('offset', null);
        $queryParam->setDefault('limit', null);
        $url     = '/v2/requisitions/{requisitionId}/history';
        $url     = str_replace('{requisitionId}', urlencode($requisitionId), $url);
        $url     = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'AskNicely\\JobAdder\\Generated\\Model\\RequisitionHistoryModel', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $requisitionId Requisition Id
     * @param array  $parameters    List of parameters
     * @param string $fetch         Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\AskNicely\JobAdder\Generated\Model\NoteListRepresentation
     */
    public function getRequisitionNotes($requisitionId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/requisitions/{requisitionId}/notes';
        $url        = str_replace('{requisitionId}', urlencode($requisitionId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'AskNicely\\JobAdder\\Generated\\Model\\NoteListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int                                                   $requisitionId
     * @param \AskNicely\JobAdder\Generated\Model\AddRequisitionNoteCommand $body
     * @param array                                                 $parameters    List of parameters
     * @param string                                                $fetch         Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\AskNicely\JobAdder\Generated\Model\NoteModel
     */
    public function addRequisitionNote($requisitionId, \AskNicely\JobAdder\Generated\Model\AddRequisitionNoteCommand $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/requisitions/{requisitionId}/notes';
        $url        = str_replace('{requisitionId}', urlencode($requisitionId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json'], 'Content-Type' => 'application/json'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($body, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('201' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'AskNicely\\JobAdder\\Generated\\Model\\NoteModel', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int                                                  $requisitionId
     * @param \AskNicely\JobAdder\Generated\Model\RejectRequisitionCommand $body
     * @param array                                                $parameters    List of parameters
     * @param string                                               $fetch         Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function rejectRequisition($requisitionId, \AskNicely\JobAdder\Generated\Model\RejectRequisitionCommand $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/requisitions/{requisitionId}/reject';
        $url        = str_replace('{requisitionId}', urlencode($requisitionId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json'], 'Content-Type' => 'application/json'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($body, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();

        return $response;
    }

    /**
     * @param int                                                  $requisitionId
     * @param \AskNicely\JobAdder\Generated\Model\SubmitRequisitionCommand $body
     * @param array                                                $parameters    List of parameters
     * @param string                                               $fetch         Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function submitRequisition($requisitionId, \AskNicely\JobAdder\Generated\Model\SubmitRequisitionCommand $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/requisitions/{requisitionId}/submit';
        $url        = str_replace('{requisitionId}', urlencode($requisitionId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json'], 'Content-Type' => 'application/json'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($body, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();

        return $response;
    }

    /**
     * @param array $parameters {
     *
     *     @var bool $unmapped
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\AskNicely\JobAdder\Generated\Model\StandardFieldListRepresentation
     */
    public function getRequisitionStandardFieldList($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('unmapped', null);
        $url     = '/v2/requisitions/fields';
        $url     = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'AskNicely\\JobAdder\\Generated\\Model\\StandardFieldListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\AskNicely\JobAdder\Generated\Model\CustomFieldListRepresentation
     */
    public function getRequisitionCustomFieldList($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/requisitions/fields/custom';
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'AskNicely\\JobAdder\\Generated\\Model\\CustomFieldListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $fieldId
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\AskNicely\JobAdder\Generated\Model\CustomFieldRepresentation
     */
    public function getRequisitionCustomFieldItem($fieldId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/requisitions/fields/custom/{fieldId}';
        $url        = str_replace('{fieldId}', urlencode($fieldId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'AskNicely\\JobAdder\\Generated\\Model\\CustomFieldRepresentation', 'json');
            }
        }

        return $response;
    }
}
