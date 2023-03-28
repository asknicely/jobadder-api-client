<?php

namespace AskNicely\JobAdder\Generated\Resource;

use AskNicely\JobAdder\Generated\QueryParam;
use AskNicely\JobAdder\Generated\Resource;

class CandidateSubmissionsResource extends Resource
{
    /**
     * @param array $parameters {
     *
     *     @var int $offset The index of the first entry to return from the resource collection
     *     @var int $limit The maximum number of entries to return. <br />
     *     @var array $submissionId
     *     @var array $candidateId
     *     @var array $companyId
     *     @var array $jobId
     *     @var array $createdAt Search for submissions created at a specific date and time
     *     @var array $updatedAt Search for submissions updated at a specific date and time
     * }
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\AskNicely\JobAdder\Generated\Model\SubmissionListRepresentation
     */
    public function findSubmissions($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('offset', null);
        $queryParam->setDefault('limit', null);
        $queryParam->setDefault('submissionId', null);
        $queryParam->setDefault('candidateId', null);
        $queryParam->setDefault('companyId', null);
        $queryParam->setDefault('jobId', null);
        $queryParam->setDefault('createdAt', null);
        $queryParam->setDefault('updatedAt', null);
        $url     = '/v2/submissions';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'AskNicely\\JobAdder\\Generated\\Model\\SubmissionListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $submissionId Submission Id
     * @param array  $parameters   List of parameters
     * @param string $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\AskNicely\JobAdder\Generated\Model\SubmissionRepresentation
     */
    public function getSubmission($submissionId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/submissions/{submissionId}';
        $url        = str_replace('{submissionId}', urlencode($submissionId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'AskNicely\\JobAdder\\Generated\\Model\\SubmissionRepresentation', 'json');
            }
        }

        return $response;
    }
}
