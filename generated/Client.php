<?php

namespace Varspool\JobAdder\V2;

class Client extends \Varspool\JobAdder\V2\Runtime\Client\Client
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $boardId Job Board Id
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobBoardListModel|\Psr\Http\Message\ResponseInterface
     */
    public function findJobBoards(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindJobBoards($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $boardId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobBoardNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobBoardModel|\Psr\Http\Message\ResponseInterface
     */
    public function getJobBoard(int $boardId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobBoard($boardId), $fetch);
    }
    /**
    * 
    *
    * @param int $boardId 
    * @param array $queryParameters {
    *     @var array $adId 
    *     @var array $reference 
    *     @var bool $portal.hotJob 
    *     @var array $portal.value 
    *     @var array $portal.valueId 
    *     @var array $portal.template 
    *     @var array $postedAt Search for job ads posted at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for job ads updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $expiresAt Search for job ads expiring at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: <code>description</code>, <code>portal.fields</code>
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobBoardJobAdListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findJobBoardJobAds(int $boardId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindJobBoardJobAds($boardId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $boardId 
     * @param int $adId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobBoardJobAdNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobBoardJobAdRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobBoardJobAd(int $boardId, int $adId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobBoardJobAd($boardId, $adId), $fetch);
    }
    /**
     * 
     *
     * @param int $boardId Job Board Id
     * @param int $adId Job Ad Id
     * @param \Varspool\JobAdder\V2\Model\SubmitJobApplicationCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\SubmitJobBoardJobApplicationUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\SubmittedJobApplicationModel|\Psr\Http\Message\ResponseInterface
     */
    public function submitJobBoardJobApplication(int $boardId, int $adId, \Varspool\JobAdder\V2\Model\SubmitJobApplicationCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\SubmitJobBoardJobApplication($boardId, $adId, $body), $fetch);
    }
    /**
    * Add a resume, cover letter or related document to a previously submitted job application.<br />
    Documents can be added for a duration of 5 minutes after submitting the job application.
    *
    * @param int $boardId Job Board Id
    * @param int $adId Job Ad Id
    * @param int $applicationId Job Application Id
    * @param string $attachmentType 
    * @param array $formParameters {
    *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Varspool\JobAdder\V2\Exception\AttachJobBoardJobApplicationDocumentUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function attachJobBoardJobApplicationDocument(int $boardId, int $adId, int $applicationId, string $attachmentType, array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AttachJobBoardJobApplicationDocument($boardId, $adId, $applicationId, $attachmentType, $formParameters), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $jobId Job Id
    *     @var string $jobTitle Job title
    *     @var array $company.companyId Companies by Id
    *     @var string $company.name Company name
    *     @var array $companyId Alias for company.companyId
    *     @var array $contactId Contact Id
    *     @var array $partnerAction.actionId Unique identifier for partner actions
    *     @var array $partnerAction.reference Partner supplied unique reference for the action
    *     @var array $partnerAction.stage Include partner actions at a specific stage
    *     @var array $partnerAction.submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $statusId Job status
    *     @var bool $active Search for active/open jobs
    *     @var bool $userFavourite Search for the user's favourite jobs
    *     @var array $folderId Search in specific folders
    *     @var array $userId User Id - search for jobs by owner or associated recruiter
    *     @var array $ownerUserId User Id - search for jobs by owner
    *     @var array $recruiterUserId User Id - search jobs by associated recruiters
    *     @var array $createdBy User Id - search for jobs created by the specified user(s)
    *     @var array $createdAt Search for jobs created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedBy User Id - search for jobs last updated by the specified user(s)
    *     @var array $updatedAt Search for jobs updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $closedBy User Id - search for jobs last closed by the specified user(s)
    *     @var array $closedAt Search for jobs closed at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: jobTitle, status.name, createdAt, updatedAt, closedAt
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: recruiters, statistics, partnerActions
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, notes, applications
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobOrderListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findJobOrders(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindJobOrders($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Varspool\JobAdder\V2\Model\AddJobOrderCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addJobOrder(\Varspool\JobAdder\V2\Model\AddJobOrderCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddJobOrder($body), $fetch);
    }
    /**
    * 
    *
    * @param int $jobId Job Id
    * @param array $queryParameters {
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: applications, notes
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderNotFoundException
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobOrderRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getJobOrder(int $jobId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrder($jobId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId 
     * @param \Varspool\JobAdder\V2\Model\UpdateJobOrderCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobOrderNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobOrderUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateJobOrder(int $jobId, \Varspool\JobAdder\V2\Model\UpdateJobOrderCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateJobOrder($jobId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param array $queryParameters {
     *     @var int $offset The index of the first entry to return from the resource collection
     *     @var int $limit The maximum number of entries to return.<br />Setting to 0 will return only the total count of matching resources.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderJobApplications(int $jobId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderJobApplications($jobId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId 
     * @param \Varspool\JobAdder\V2\Model\AddJobOrderCandidateCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddJobOrderCandidatesConflictException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addJobOrderCandidates(int $jobId, \Varspool\JobAdder\V2\Model\AddJobOrderCandidateCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddJobOrderCandidates($jobId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param array $queryParameters {
     *     @var int $offset The index of the first entry to return from the resource collection
     *     @var int $limit The maximum number of entries to return.<br />Setting to 0 will return only the total count of matching resources.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderActiveJobApplications(int $jobId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderActiveJobApplications($jobId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId 
     * @param \Varspool\JobAdder\V2\Model\SubmitJobOrderCandidateCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\SubmitJobOrderCandidateUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function submitJobOrderCandidate(int $jobId, \Varspool\JobAdder\V2\Model\SubmitJobOrderCandidateCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\SubmitJobOrderCandidate($jobId, $command), $fetch);
    }
    /**
    * 
    *
    * @param int $jobId 
    * @param array $queryParameters {
    *     @var array $type Attachment types to include
    *     @var bool $latest Find the latest version of each attachment type
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobOrderAttachmentListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findJobOrderAttachments(int $jobId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindJobOrderAttachments($jobId, $queryParameters), $fetch);
    }
    /**
     * Get a job attachment.<br />Setting the Accept header will attempt a file conversion.
     *
     * @param int $jobId Job Id
     * @param int $attach Attachment Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderAttachment(int $jobId, int $attach, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderAttachment($jobId, $attach), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param string $attach 
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddJobOrderAttachmentNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderAttachmentRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addJobOrderAttachment(int $jobId, string $attach, array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddJobOrderAttachment($jobId, $attach, $formParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param int $attach Attachment Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobOrderAttachmentCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobOrderAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateJobOrderAttachment(int $jobId, int $attach, \Varspool\JobAdder\V2\Model\UpdateJobOrderAttachmentCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateJobOrderAttachment($jobId, $attach, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\SubmissionListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderSubmissions(int $jobId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderSubmissions($jobId), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderPlacements(int $jobId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderPlacements($jobId), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderApprovedPlacements(int $jobId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderApprovedPlacements($jobId), $fetch);
    }
    /**
     * Change the job status and add an optional note
     *
     * @param int $jobId 
     * @param \Varspool\JobAdder\V2\Model\SetJobOrderStatusCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutJobOrderStatusNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\PutJobOrderStatusUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putJobOrderStatus(int $jobId, \Varspool\JobAdder\V2\Model\SetJobOrderStatusCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutJobOrderStatus($jobId, $body), $fetch);
    }
    /**
    * 
    *
    * @param int $jobId Job Id
    * @param array $queryParameters {
    *     @var array $noteId Note Id
    *     @var array $type Note type
    *     @var array $reference Reference value used to identify a note or group of notes
    *     @var array $createdAt Search for notes created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for notes updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: type, createdAt, updatedAt
    *     @var array $fields Additional fields to include with the results.<br />
    Fields available to include are: text
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\NoteListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getJobOrderNotes(int $jobId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderNotes($jobId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId 
     * @param \Varspool\JobAdder\V2\Model\AddJobOrderNoteCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddJobOrderNoteNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteModel|\Psr\Http\Message\ResponseInterface
     */
    public function addJobOrderNote(int $jobId, \Varspool\JobAdder\V2\Model\AddJobOrderNoteCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddJobOrderNote($jobId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderActivitySummaryListModel|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderActivityByJobId(int $jobId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderActivityByJobId($jobId), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param \Varspool\JobAdder\V2\Model\AddJobOrderActivityCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddJobOrderActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderActivityModel|\Psr\Http\Message\ResponseInterface
     */
    public function addJobOrderActivity(int $jobId, \Varspool\JobAdder\V2\Model\AddJobOrderActivityCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddJobOrderActivity($jobId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param int $activityId Activity Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderActivityRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderActivity(int $jobId, int $activityId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderActivity($jobId, $activityId), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\InvoicesNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderInvoiceListModel|\Psr\Http\Message\ResponseInterface
     */
    public function invoices(int $jobId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\Invoices($jobId), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param int $invoiceId Invoice Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderInvoiceNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderRetainedInvoiceRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderInvoice(int $jobId, int $invoiceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderInvoice($jobId, $invoiceId), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param \Varspool\JobAdder\V2\Model\AddJobOrderUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddJobOrderUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderUserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function addJobOrderUserTask(int $jobId, \Varspool\JobAdder\V2\Model\AddJobOrderUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddJobOrderUserTask($jobId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param int $taskId Task Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderUserTaskRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderUserTask(int $jobId, int $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderUserTask($jobId, $taskId), $fetch);
    }
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param int $taskId Task Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobOrderUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobOrderUserTaskNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobOrderUserTaskUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderUserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function updateJobOrderUserTask(int $jobId, int $taskId, \Varspool\JobAdder\V2\Model\UpdateJobOrderUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateJobOrderUserTask($jobId, $taskId, $command), $fetch);
    }
    /**
     * Applicable to RateCalc generated RateCardID for Astute Payroll
     *
     * @param int $jobOrderId Job Order Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\DeleteJobOrderPayrollBillingNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteJobOrderPayrollBilling(int $jobOrderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeleteJobOrderPayrollBilling($jobOrderId), $fetch);
    }
    /**
     * Applicable to RateCalc generated RateCardID for Astute Payroll
     *
     * @param int $jobOrderId Job Order Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderPayrollBillingNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderRateCardModel|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderPayrollBilling(int $jobOrderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderPayrollBilling($jobOrderId), $fetch);
    }
    /**
     * Applicable to RateCalc generated RateCardID for Astute Payroll
     *
     * @param int $jobOrderId Job Order Id
     * @param int $rateCardId Rate Card ID generated by RateCalc
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddJobOrderPayrollBillingNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderRateCardModel|\Psr\Http\Message\ResponseInterface
     */
    public function addJobOrderPayrollBilling(int $jobOrderId, int $rateCardId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddJobOrderPayrollBilling($jobOrderId, $rateCardId), $fetch);
    }
    /**
     * Applicable to RateCalc generated RateCardID for Astute Payroll
     *
     * @param int $jobOrderId Job Order Id
     * @param int $rateCardId Rate Card ID generated by RateCalc
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobOrderPayrollBillingNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderRateCardModel|\Psr\Http\Message\ResponseInterface
     */
    public function updateJobOrderPayrollBilling(int $jobOrderId, int $rateCardId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateJobOrderPayrollBilling($jobOrderId, $rateCardId), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $createdAt Search for activities performed at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for activities updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var bool $includeDetails 
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobOrderActivityListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findJobOrderActivity(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindJobOrderActivity($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderActivitySettingsListModel|\Psr\Http\Message\ResponseInterface
     */
    public function findJobOrderActivitySettings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindJobOrderActivitySettings(), $fetch);
    }
    /**
     * 
     *
     * @param int $settingId Activity Setting Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderActivitySettingNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderActivitySettingModel|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderActivitySetting(int $settingId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderActivitySetting($settingId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\DeletedJobOrderListModel|\Psr\Http\Message\ResponseInterface
     */
    public function deletedJobOrders(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeletedJobOrders(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderCustomFieldList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderCustomFieldList(), $fetch);
    }
    /**
     * 
     *
     * @param int $fieldId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderCustomFieldItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderCustomFieldItem(int $fieldId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderCustomFieldItem($fieldId), $fetch);
    }
    /**
     * 
     *
     * @param int $fieldId 
     * @param \Varspool\JobAdder\V2\Model\SetJobOrderCustomFieldListValuesCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutJobOrderCustomFieldListNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function putJobOrderCustomFieldList(int $fieldId, \Varspool\JobAdder\V2\Model\SetJobOrderCustomFieldListValuesCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutJobOrderCustomFieldList($fieldId, $command), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $type Optionally filter to specific attachment types
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderAttachmentCategoryListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderAttachmentCategoryList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderAttachmentCategoryList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteTypeListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderNoteTypeList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderNoteTypeList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\ListOfNameModel|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderSourceList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderSourceList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $statusId 
     *     @var string $name 
     *     @var bool $active 
     *     @var bool $default 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\StatusListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderStatusList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderStatusList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $statusId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderStatusItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\StatusRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobOrderStatusItem(int $statusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobOrderStatusItem($statusId), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $requisitionId Requisition Id
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
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for jobs updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: jobTitle, status, createdAt, updatedAt
    *     @var array $fields Additional fields to include with the results.<br />
    Fields available to include are: workflow
    *     @var array $embed Linked resources to embed in the results<br />
    Resources available are: self, notes
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\RequisitionListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findRequisitions(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindRequisitions($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Varspool\JobAdder\V2\Model\AddRequisitionCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\RequisitionRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addRequisition(\Varspool\JobAdder\V2\Model\AddRequisitionCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddRequisition($body), $fetch);
    }
    /**
     * 
     *
     * @param int $requisitionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRequisition(int $requisitionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeleteRequisition($requisitionId), $fetch);
    }
    /**
    * 
    *
    * @param int $requisitionId Requisition Id
    * @param array $queryParameters {
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: notes
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Varspool\JobAdder\V2\Exception\GetRequisitionNotFoundException
    *
    * @return null|\Varspool\JobAdder\V2\Model\RequisitionRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getRequisition(int $requisitionId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetRequisition($requisitionId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $requisitionId Requisition Id
     * @param \Varspool\JobAdder\V2\Model\UpdateRequisitionCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateRequisition(int $requisitionId, \Varspool\JobAdder\V2\Model\UpdateRequisitionCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateRequisition($requisitionId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $requisitionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteAttachmentListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getRequisitionAttachmentList(int $requisitionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetRequisitionAttachmentList($requisitionId), $fetch);
    }
    /**
     * 
     *
     * @param int $requisitionId Requisition Id
     * @param string $attachmentId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\DeleteRequisitionAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRequisitionAttachment(int $requisitionId, string $attachmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeleteRequisitionAttachment($requisitionId, $attachmentId), $fetch);
    }
    /**
     * 
     *
     * @param int $requisitionId Requisition Id
     * @param string $attachmentId Attachment Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetRequisitionAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getRequisitionAttachment(int $requisitionId, string $attachmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetRequisitionAttachment($requisitionId, $attachmentId), $fetch);
    }
    /**
     * 
     *
     * @param int $requisitionId Requisition Id
     * @param string $attachmentType 
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddRequisitionAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addRequisitionAttachment(int $requisitionId, string $attachmentType, array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddRequisitionAttachment($requisitionId, $attachmentType, $formParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $requisitionId 
     * @param \Varspool\JobAdder\V2\Model\ApproveRequisitionCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\ApproveRequisitionNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function approveRequisition(int $requisitionId, \Varspool\JobAdder\V2\Model\ApproveRequisitionCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\ApproveRequisition($requisitionId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $requisitionId Requisition Id
     * @param array $queryParameters {
     *     @var int $offset 
     *     @var int $limit 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\RequisitionHistoryModel|\Psr\Http\Message\ResponseInterface
     */
    public function getRequisitionApprovalHistory(int $requisitionId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetRequisitionApprovalHistory($requisitionId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $requisitionId 
     * @param \Varspool\JobAdder\V2\Model\RejectRequisitionCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\RejectRequisitionNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rejectRequisition(int $requisitionId, \Varspool\JobAdder\V2\Model\RejectRequisitionCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\RejectRequisition($requisitionId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $requisitionId 
     * @param \Varspool\JobAdder\V2\Model\SubmitRequisitionCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\SubmitRequisitionNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function submitRequisition(int $requisitionId, \Varspool\JobAdder\V2\Model\SubmitRequisitionCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\SubmitRequisition($requisitionId, $body), $fetch);
    }
    /**
    * 
    *
    * @param int $requisitionId Requisition Id
    * @param array $queryParameters {
    *     @var array $noteId Note Id
    *     @var array $type Note type
    *     @var array $reference Reference value used to identify a note or group of notes
    *     @var array $createdAt Search for notes created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for notes updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: type, createdAt, updatedAt
    *     @var array $fields Additional fields to include with the results.<br />
    Fields available to include are: text
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\NoteListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getRequisitionNotes(int $requisitionId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetRequisitionNotes($requisitionId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $requisitionId 
     * @param \Varspool\JobAdder\V2\Model\AddRequisitionNoteCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddRequisitionNoteNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteModel|\Psr\Http\Message\ResponseInterface
     */
    public function addRequisitionNote(int $requisitionId, \Varspool\JobAdder\V2\Model\AddRequisitionNoteCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddRequisitionNote($requisitionId, $command), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\RequisitionFormListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getRequisitionForms(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetRequisitionForms(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getRequisitionCustomFieldList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetRequisitionCustomFieldList(), $fetch);
    }
    /**
     * 
     *
     * @param int $fieldId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetRequisitionCustomFieldItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getRequisitionCustomFieldItem(int $fieldId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetRequisitionCustomFieldItem($fieldId), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $partnerAction.actionId Unique identifier for partner actions
    *     @var array $partnerAction.reference Partner supplied unique reference for the action
    *     @var array $partnerAction.stage Include partner actions at a specific stage
    *     @var array $partnerAction.submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: self,applications,partnerActions
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, applications
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobAdListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getJobAds(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobAds($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Varspool\JobAdder\V2\Model\AddJobAdDraftCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobAdRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addJobAdDraft(\Varspool\JobAdder\V2\Model\AddJobAdDraftCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddJobAdDraft($body), $fetch);
    }
    /**
    * 
    *
    * @param int $adId Job Ad Id
    * @param array $queryParameters {
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: applications
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Varspool\JobAdder\V2\Exception\GetJobAdNotFoundException
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobAdRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getJobAd(int $adId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobAd($adId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $adId 
     * @param \Varspool\JobAdder\V2\Model\UpdateJobAdDraftCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateJobAdDraft(int $adId, \Varspool\JobAdder\V2\Model\UpdateJobAdDraftCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateJobAdDraft($adId, $body), $fetch);
    }
    /**
    * 
    *
    * @param int $adId Job Ad Id
    * @param array $queryParameters {
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getJobAdJobApplications(int $adId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobAdJobApplications($adId, $queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param int $adId Job Ad Id
    * @param array $queryParameters {
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getJobAdActiveJobApplications(int $adId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobAdActiveJobApplications($adId, $queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $candidateId Candidate Id
    *     @var string $name Candidate name
    *     @var string $email Candidate email
    *     @var string $phone Candidate phone or mobile number
    *     @var string $currentPosition Current Position
    *     @var string $city City
    *     @var string $state State
    *     @var string $location Location (city and/or state)
    *     @var string $keywords Search for key-words within the latest candidate resume
    *     @var array $partnerAction.actionId Unique identifier for partner actions
    *     @var array $partnerAction.reference Partner supplied unique reference for the action
    *     @var array $partnerAction.stage Include partner actions at a specific stage
    *     @var array $partnerAction.submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $statusId Candidate status
    *     @var array $recruiterUserId User Id - search candidates by associated recruiters
    *     @var array $folderId Search in specific folders
    *     @var array $createdAt Search for candidates created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for candidates updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Default sort order is by candidateID in ascending order
    Fields available for sorting are: firstName, lastName, status.name, candidateId, createdAt, updatedAt
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: recruiters, statistics
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, applications, placements, skills, notes
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\CandidateListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findCandidates(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindCandidates($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Varspool\JobAdder\V2\Model\AddCandidateCommand $body 
     * @param array $headerParameters {
     *     @var string $X-Allow-Duplicates Duplicate override code from the header of an earlier 409 response
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddCandidateConflictException
     * @throws \Varspool\JobAdder\V2\Exception\AddCandidateUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addCandidate(\Varspool\JobAdder\V2\Model\AddCandidateCommand $body, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCandidate($body, $headerParameters), $fetch);
    }
    /**
    * 
    *
    * @param int $candidateId Candidate Id
    * @param array $queryParameters {
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: skills, notes, applications, placements
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Varspool\JobAdder\V2\Exception\GetCandidateNotFoundException
    *
    * @return null|\Varspool\JobAdder\V2\Model\CandidateRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getCandidate(int $candidateId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidate($candidateId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId 
     * @param \Varspool\JobAdder\V2\Model\UpdateCandidateCommand $body 
     * @param array $headerParameters {
     *     @var string $X-Allow-Duplicates Duplicate override code from the header of an earlier 409 response
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateConflictException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateCandidate(int $candidateId, \Varspool\JobAdder\V2\Model\UpdateCandidateCommand $body, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateCandidate($candidateId, $body, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\DeleteCandidatePhotoNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCandidatePhoto(int $candidateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeleteCandidatePhoto($candidateId), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param array $queryParameters {
     *     @var int $w Reduce the size of the photo to fit the width specified by w
     *     @var int $h Reduce the size of the photo to fit the height specified by h
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCandidatePhotoNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidatePhoto(int $candidateId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidatePhoto($candidateId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param array $queryParameters {
     *     @var int $w Reduce the size of the photo to fit the width specified by w
     *     @var int $h Reduce the size of the photo to fit the height specified by h
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\HeadCandidatePhotoNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function headCandidatePhoto(int $candidateId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\HeadCandidatePhoto($candidateId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidatePhotoNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateCandidatePhoto(int $candidateId, array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateCandidatePhoto($candidateId, $formParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateAvailabilityListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateAvailability(int $candidateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateAvailability($candidateId), $fetch);
    }
    /**
     * Remove the candidates availability schedule for a single week
     *
     * @param int $candidateId Candidate Id
     * @param array $queryParameters {
     *     @var string $weekOf Remove availability for the week (beginning Sunday) containing the specified date
     *     @var bool $recurring Remove availability in following weeks. Previous/past recurring schedules will be terminated prior to this schedule, all existing future overlapping schedules will be cancelled.
     *     @var string $until Optional end date of repeating availability removal
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\DeleteCandidateAvailabilityWeekNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCandidateAvailabilityWeek(int $candidateId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeleteCandidateAvailabilityWeek($candidateId, $queryParameters), $fetch);
    }
    /**
     * Set the candidates availability schedule for a single week
     *
     * @param int $candidateId Candidate Id
     * @param \Varspool\JobAdder\V2\Model\SetCandidateAvailabilityByWeekCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateAvailabilityWeekNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateCandidateAvailabilityWeek(int $candidateId, \Varspool\JobAdder\V2\Model\SetCandidateAvailabilityByWeekCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateCandidateAvailabilityWeek($candidateId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateVideoListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateVideos(int $candidateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateVideos($candidateId), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId 
     * @param string $videoType 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetLatestCandidateVideoNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateVideoRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getLatestCandidateVideo(int $candidateId, string $videoType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetLatestCandidateVideo($candidateId, $videoType), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param string $videoType 
     * @param \Varspool\JobAdder\V2\Model\AddCandidateVideoCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddCandidateVideoNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateVideoModel|\Psr\Http\Message\ResponseInterface
     */
    public function addCandidateVideo(int $candidateId, string $videoType, \Varspool\JobAdder\V2\Model\AddCandidateVideoCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCandidateVideo($candidateId, $videoType, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CategoryListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateSkills(int $candidateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateSkills($candidateId), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId 
     * @param \Varspool\JobAdder\V2\Model\RemoveCandidateSkillsCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CategoryListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCandidateSkills(int $candidateId, \Varspool\JobAdder\V2\Model\RemoveCandidateSkillsCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeleteCandidateSkills($candidateId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId 
     * @param \Varspool\JobAdder\V2\Model\UpdateCandidateSkillsCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CategoryListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function putCandidateSkills(int $candidateId, \Varspool\JobAdder\V2\Model\UpdateCandidateSkillsCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutCandidateSkills($candidateId, $command), $fetch);
    }
    /**
     * Remove a single category and all associated sub-categories and skills
     *
     * @param int $candidateId 
     * @param int $categoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CategoryListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCandidateCategory(int $candidateId, int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeleteCandidateCategory($candidateId, $categoryId), $fetch);
    }
    /**
    * 
    *
    * @param int $candidateId 
    * @param array $queryParameters {
    *     @var array $type Attachment types to include
    *     @var array $category Search by attachment category
    *     @var bool $latest Find the latest version of each attachment type
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\CandidateAttachmentListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findCandidateAttachments(int $candidateId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindCandidateAttachments($candidateId, $queryParameters), $fetch);
    }
    /**
     * Get a candidate attachment.<br />Setting the Accept header will attempt a file conversion.
     *
     * @param int $candidateId Candidate Id
     * @param int $attach Attachment Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCandidateAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateAttachment(int $candidateId, int $attach, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateAttachment($candidateId, $attach), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param string $attach Type of attachment being added
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddCandidateAttachmentNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateAttachmentRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addCandidateAttachment(int $candidateId, string $attach, array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCandidateAttachment($candidateId, $attach, $formParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param int $attach Attachment Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCandidateAttachmentCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateAttachmentNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateAttachmentRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function updateCandidateAttachment(int $candidateId, int $attach, \Varspool\JobAdder\V2\Model\UpdateCandidateAttachmentCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateCandidateAttachment($candidateId, $attach, $command), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $candidateId 
    *     @var array $type Attachment types to include
    *     @var array $category Search by attachment category
    *     @var array $createdAt Search for candidate attachment created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for candidate attachment updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $expiryDate Search for candidate attachment expiring in the specified date range
    ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date.
    Specify multiple parameters to search for a range.
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: candidate
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\CandidateAttachmentListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findAllCandidateAttachments(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindAllCandidateAttachments($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\FloatListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateFloats(int $candidateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateFloats($candidateId), $fetch);
    }
    /**
     * This will include both active and complete/closed job applications
     *
     * @param int $candidateId Candidate Id
     * @param array $queryParameters {
     *     @var int $offset The index of the first entry to return from the resource collection
     *     @var int $limit The maximum number of entries to return.<br />Setting to 0 will return only the total count of matching resources.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateJobApplications(int $candidateId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateJobApplications($candidateId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId 
     * @param \Varspool\JobAdder\V2\Model\AddCandidateJobOrderCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddCandidateJobOrdersConflictException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addCandidateJobOrders(int $candidateId, \Varspool\JobAdder\V2\Model\AddCandidateJobOrderCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCandidateJobOrders($candidateId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param array $queryParameters {
     *     @var int $offset The index of the first entry to return from the resource collection
     *     @var int $limit The maximum number of entries to return.<br />Setting to 0 will return only the total count of matching resources.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getActiveCandidateJobApplications(int $candidateId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetActiveCandidateJobApplications($candidateId, $queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param int $candidateId Candidate Id
    * @param array $queryParameters {
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\InterviewListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getCandidateInterviews(int $candidateId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateInterviews($candidateId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\SubmissionListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateSubmissions(int $candidateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateSubmissions($candidateId), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidatePlacements(int $candidateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidatePlacements($candidateId), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateApprovedPlacements(int $candidateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateApprovedPlacements($candidateId), $fetch);
    }
    /**
     * Change the candidate status and add an optional note
     *
     * @param int $candidateId 
     * @param \Varspool\JobAdder\V2\Model\SetCandidateStatusCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutCandidateStatusNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\PutCandidateStatusUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCandidateStatus(int $candidateId, \Varspool\JobAdder\V2\Model\SetCandidateStatusCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutCandidateStatus($candidateId, $body), $fetch);
    }
    /**
    * 
    *
    * @param int $candidateId Candidate Id
    * @param array $queryParameters {
    *     @var array $noteId Note Id
    *     @var array $type Note type
    *     @var array $reference Reference value used to identify a note or group of notes
    *     @var array $createdAt Search for notes created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for notes updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: type, createdAt, updatedAt
    *     @var array $fields Additional fields to include with the results.<br />
    Fields available to include are: text
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\NoteListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getCandidateNotes(int $candidateId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateNotes($candidateId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param \Varspool\JobAdder\V2\Model\AddCandidateNoteCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddCandidateNoteNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteModel|\Psr\Http\Message\ResponseInterface
     */
    public function addCandidateNote(int $candidateId, \Varspool\JobAdder\V2\Model\AddCandidateNoteCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCandidateNote($candidateId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PrivacyDeleteCandidateNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function privacyDeleteCandidate(int $candidateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PrivacyDeleteCandidate($candidateId), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateActivitySummaryListModel|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateActivityByCandidateId(int $candidateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateActivityByCandidateId($candidateId), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param \Varspool\JobAdder\V2\Model\AddCandidateActivityCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddCandidateActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateActivityModel|\Psr\Http\Message\ResponseInterface
     */
    public function addCandidateActivity(int $candidateId, \Varspool\JobAdder\V2\Model\AddCandidateActivityCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCandidateActivity($candidateId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param int $activityId Activity Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCandidateActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateActivityRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateActivity(int $candidateId, int $activityId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateActivity($candidateId, $activityId), $fetch);
    }
    /**
     * Applicable to FT360 enabled accounts only
     *
     * @param int $candidateId Candidate Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCandidatePayrollBillingNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidatePayrollBillingModel|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidatePayrollBilling(int $candidateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidatePayrollBilling($candidateId), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param \Varspool\JobAdder\V2\Model\AddCandidateUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddCandidateUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateUserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function addCandidateUserTask(int $candidateId, \Varspool\JobAdder\V2\Model\AddCandidateUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCandidateUserTask($candidateId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param int $taskId Task Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCandidateUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateUserTaskRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateUserTask(int $candidateId, int $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateUserTask($candidateId, $taskId), $fetch);
    }
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param int $taskId Task Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCandidateUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateUserTaskNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateUserTaskUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateUserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function updateCandidateUserTask(int $candidateId, int $taskId, \Varspool\JobAdder\V2\Model\UpdateCandidateUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateCandidateUserTask($candidateId, $taskId, $command), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $createdAt Search for activities performed at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for activities updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var bool $includeDetails 
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\CandidateActivityListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findCandidateActivities(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindCandidateActivities($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateActivitySettingsListModel|\Psr\Http\Message\ResponseInterface
     */
    public function findCandidateActivitySettings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindCandidateActivitySettings(), $fetch);
    }
    /**
     * 
     *
     * @param int $settingId Activity Setting Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCandidateActivitySettingNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateActivitySettingModel|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateActivitySetting(int $settingId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateActivitySetting($settingId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\DeletedCandidateListModel|\Psr\Http\Message\ResponseInterface
     */
    public function deletedCandidates(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeletedCandidates(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateCustomFieldList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateCustomFieldList(), $fetch);
    }
    /**
     * 
     *
     * @param int $fieldId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCandidateCustomFieldListItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateCustomFieldListItem(int $fieldId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateCustomFieldListItem($fieldId), $fetch);
    }
    /**
     * 
     *
     * @param int $fieldId 
     * @param \Varspool\JobAdder\V2\Model\SetCandidateCustomFieldListValuesCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutCandidateCustomFieldListItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function putCandidateCustomFieldListItem(int $fieldId, \Varspool\JobAdder\V2\Model\SetCandidateCustomFieldListValuesCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutCandidateCustomFieldListItem($fieldId, $command), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $type Optionally filter to specific attachment types
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateAttachmentCategoryListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateAttachmentCategoryList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateAttachmentCategoryList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteTypeListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateNoteTypeList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateNoteTypeList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\ListOfNameModel|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateRatingList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateRatingList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\ListOfNameModel|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateSalutationList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateSalutationList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\ListOfNameModel|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateSourceList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateSourceList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $statusId 
     *     @var string $name 
     *     @var bool $active 
     *     @var bool $default 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\StatusListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateStatusList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateStatusList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $statusId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCandidateStatusListItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\StatusRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCandidateStatusListItem(int $statusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCandidateStatusListItem($statusId), $fetch);
    }
    /**
     * Applicable to FT360 enabled accounts only
     *
     * @param array $queryParameters {
     *     @var array $candidateId Candidate Ids
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\FindCandidatesPayrollBillingsBadRequestException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidatePayrollBillingListModel|\Psr\Http\Message\ResponseInterface
     */
    public function findCandidatesPayrollBillings(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindCandidatesPayrollBillings($queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $floatId Float Id
    *     @var array $candidateId Candidate Id
    *     @var array $companyId Company Id
    *     @var array $createdAt Search for floats created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for floats updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\FloatListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getFloats(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetFloats($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $floatId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetFloatNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\FloatRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getFloat(int $floatId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetFloat($floatId), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $submissionId 
    *     @var array $candidateId 
    *     @var array $companyId 
    *     @var array $jobId 
    *     @var array $createdAt Search for submissions created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for submissions updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\SubmissionListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findSubmissions(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindSubmissions($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $submissionId Submission Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetSubmissionNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\SubmissionRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getSubmission(int $submissionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetSubmission($submissionId), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $applicationId Application Id
    *     @var array $candidateId Candidate Id
    *     @var array $jobId Job Id
    *     @var array $adId Job Ad Id
    *     @var array $statusId Job application status
    *     @var string $jobTitle 
    *     @var bool $active Search for active job applications
    *     @var bool $rejected Search for rejected job applications
    *     @var array $review.stage Search for job applications at the specified review stage.
    *     @var array $review.userId Search for job applications submitted for review by the specified users.
    *     @var array $review.contactId Search for job applications submitted for review to the specified hiring manager contacts
    *     @var array $review.submittedAt Search for job applications submitted for review at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $review.reviewedAt Search for job applications reviewed at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var string $keywords Search for key words within the applicant's resume
    *     @var array $partnerAction.actionId Unique identifier for partner actions
    *     @var array $partnerAction.reference Partner supplied unique reference for the action
    *     @var array $partnerAction.stage Include partner actions at a specific stage
    *     @var array $partnerAction.submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $folderId Search in specific folders
    *     @var array $createdAt Search for job applications created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedBy User Id - search for job applications last updated by the specified user(s)
    *     @var array $updatedAt Search for job applications updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: createdAt, status.name, review.stage, review.submittedAt, review.reviewedAt
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: partnerActions
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findJobApplications(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindJobApplications($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Job Application Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobApplicationNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobApplication(int $applicationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplication($applicationId), $fetch);
    }
    /**
     * Update job application status and custom fields
     *
     * @param int $applicationId 
     * @param \Varspool\JobAdder\V2\Model\UpdateJobApplicationCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobApplicationNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobApplicationUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateJobApplication(int $applicationId, \Varspool\JobAdder\V2\Model\UpdateJobApplicationCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateJobApplication($applicationId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateVideoListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobApplicationVideos(int $applicationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplicationVideos($applicationId), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId 
     * @param string $videoType 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetLatestJobApplicationVideoNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateVideoRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getLatestJobApplicationVideo(int $applicationId, string $videoType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetLatestJobApplicationVideo($applicationId, $videoType), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Job Application Id
     * @param string $videoType 
     * @param \Varspool\JobAdder\V2\Model\AddJobApplicationVideoCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddJobApplicationVideoNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateVideoModel|\Psr\Http\Message\ResponseInterface
     */
    public function addJobApplicationVideo(int $applicationId, string $videoType, \Varspool\JobAdder\V2\Model\AddJobApplicationVideoCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddJobApplicationVideo($applicationId, $videoType, $command), $fetch);
    }
    /**
    * 
    *
    * @param int $applicationId 
    * @param array $queryParameters {
    *     @var array $type Attachment types to include
    *     @var array $category Search by attachment label
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\CandidateAttachmentListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findJobApplicationAttachments(int $applicationId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindJobApplicationAttachments($applicationId, $queryParameters), $fetch);
    }
    /**
     * Get a job application attachment.<br />Setting the Accept header will attempt a file conversion.
     *
     * @param int $applicationId Job Application Id
     * @param int $attach Attachment Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobApplicationAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getJobApplicationAttachment(int $applicationId, int $attach, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplicationAttachment($applicationId, $attach), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Job Application Id
     * @param string $attach 
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddJobApplicationAttachmentNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateAttachmentRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addJobApplicationAttachment(int $applicationId, string $attach, array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddJobApplicationAttachment($applicationId, $attach, $formParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Job Application Id
     * @param int $attach Attachment Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobApplicationAttachmentCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobApplicationAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateJobApplicationAttachment(int $applicationId, int $attach, \Varspool\JobAdder\V2\Model\UpdateJobApplicationAttachmentCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateJobApplicationAttachment($applicationId, $attach, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId 
     * @param \Varspool\JobAdder\V2\Model\ReviewSubmitJobApplicationCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\ReviewSubmitJobApplicationNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reviewSubmitJobApplication(int $applicationId, \Varspool\JobAdder\V2\Model\ReviewSubmitJobApplicationCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\ReviewSubmitJobApplication($applicationId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId 
     * @param \Varspool\JobAdder\V2\Model\ReviewViewJobApplicationCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\ReviewViewJobApplicationNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reviewViewJobApplication(int $applicationId, \Varspool\JobAdder\V2\Model\ReviewViewJobApplicationCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\ReviewViewJobApplication($applicationId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId 
     * @param \Varspool\JobAdder\V2\Model\ReviewAcceptJobApplicationCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\ReviewAcceptJobApplicationNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reviewAcceptJobApplication(int $applicationId, \Varspool\JobAdder\V2\Model\ReviewAcceptJobApplicationCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\ReviewAcceptJobApplication($applicationId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId 
     * @param \Varspool\JobAdder\V2\Model\ReviewRejectJobApplicationCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\ReviewRejectJobApplicationNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reviewRejectJobApplication(int $applicationId, \Varspool\JobAdder\V2\Model\ReviewRejectJobApplicationCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\ReviewRejectJobApplication($applicationId, $body), $fetch);
    }
    /**
    * 
    *
    * @param int $applicationId Job Application Id
    * @param array $queryParameters {
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\InterviewListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getJobApplicationInterviews(int $applicationId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplicationInterviews($applicationId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Application Id
     * @param \Varspool\JobAdder\V2\Model\AddJobApplicationExternalInterviewCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PostJobApplicationExternalInterviewBadRequestException
     * @throws \Varspool\JobAdder\V2\Exception\PostJobApplicationExternalInterviewNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewModel|\Psr\Http\Message\ResponseInterface
     */
    public function postJobApplicationExternalInterview(int $applicationId, \Varspool\JobAdder\V2\Model\AddJobApplicationExternalInterviewCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PostJobApplicationExternalInterview($applicationId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Application Id
     * @param int $interviewId Interview Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobApplicationInterviewCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutJobApplicationExternalInterviewBadRequestException
     * @throws \Varspool\JobAdder\V2\Exception\PutJobApplicationExternalInterviewNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewModel|\Psr\Http\Message\ResponseInterface
     */
    public function putJobApplicationExternalInterview(int $applicationId, int $interviewId, \Varspool\JobAdder\V2\Model\UpdateJobApplicationInterviewCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutJobApplicationExternalInterview($applicationId, $interviewId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Application Id
     * @param \Varspool\JobAdder\V2\Model\AddJobApplicationInternalInterviewCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PostJobApplicationInternalInterviewBadRequestException
     * @throws \Varspool\JobAdder\V2\Exception\PostJobApplicationInternalInterviewNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewModel|\Psr\Http\Message\ResponseInterface
     */
    public function postJobApplicationInternalInterview(int $applicationId, \Varspool\JobAdder\V2\Model\AddJobApplicationInternalInterviewCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PostJobApplicationInternalInterview($applicationId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Application Id
     * @param int $interviewId Interview Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobApplicationInterviewCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutJobApplicationInternalInterviewBadRequestException
     * @throws \Varspool\JobAdder\V2\Exception\PutJobApplicationInternalInterviewNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewModel|\Psr\Http\Message\ResponseInterface
     */
    public function putJobApplicationInternalInterview(int $applicationId, int $interviewId, \Varspool\JobAdder\V2\Model\UpdateJobApplicationInterviewCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutJobApplicationInternalInterview($applicationId, $interviewId, $command), $fetch);
    }
    /**
     * Change the job application status and add an optional note
     *
     * @param int $applicationId 
     * @param \Varspool\JobAdder\V2\Model\SetJobApplicationStatusCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutJobApplicationStatusNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\PutJobApplicationStatusUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putJobApplicationStatus(int $applicationId, \Varspool\JobAdder\V2\Model\SetJobApplicationStatusCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutJobApplicationStatus($applicationId, $body), $fetch);
    }
    /**
    * 
    *
    * @param int $applicationId Job Application Id
    * @param array $queryParameters {
    *     @var array $noteId Note Id
    *     @var array $type Note type
    *     @var array $reference Reference value used to identify a note or group of notes
    *     @var array $createdAt Search for notes created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for notes updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: type, createdAt, updatedAt
    *     @var array $fields Additional fields to include with the results.<br />
    Fields available to include are: text
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\NoteListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getJobApplicationNotes(int $applicationId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplicationNotes($applicationId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId 
     * @param \Varspool\JobAdder\V2\Model\AddJobApplicationNoteCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddJobApplicationNoteNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteModel|\Psr\Http\Message\ResponseInterface
     */
    public function addJobApplicationNote(int $applicationId, \Varspool\JobAdder\V2\Model\AddJobApplicationNoteCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddJobApplicationNote($applicationId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Job application Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationActivitySummaryListModel|\Psr\Http\Message\ResponseInterface
     */
    public function getJobApplicationActivityByApplicationId(int $applicationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplicationActivityByApplicationId($applicationId), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Job application Id
     * @param \Varspool\JobAdder\V2\Model\AddJobApplicationActivityCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddJobApplicationActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationActivityModel|\Psr\Http\Message\ResponseInterface
     */
    public function addJobApplicationActivity(int $applicationId, \Varspool\JobAdder\V2\Model\AddJobApplicationActivityCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddJobApplicationActivity($applicationId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Job application Id
     * @param int $activityId Activity Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobApplicationActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationActivityRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobApplicationActivity(int $applicationId, int $activityId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplicationActivity($applicationId, $activityId), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Application Id
     * @param \Varspool\JobAdder\V2\Model\AddJobApplicationUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddJobApplicationUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationUserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function addJobApplicationUserTask(int $applicationId, \Varspool\JobAdder\V2\Model\AddJobApplicationUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddJobApplicationUserTask($applicationId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Application Id
     * @param int $taskId Task Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobApplicationUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationUserTaskRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobApplicationUserTask(int $applicationId, int $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplicationUserTask($applicationId, $taskId), $fetch);
    }
    /**
     * 
     *
     * @param int $applicationId Application Id
     * @param int $taskId Task Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobApplicationUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobApplicationUserTaskNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobApplicationUserTaskUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationUserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function updateJobApplicationUserTask(int $applicationId, int $taskId, \Varspool\JobAdder\V2\Model\UpdateJobApplicationUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateJobApplicationUserTask($applicationId, $taskId, $command), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $createdAt Search for activities performed at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for activities updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var bool $includeDetails 
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobApplicationActivityListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findJobApplicationActivity(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindJobApplicationActivity($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationActivitySettingsListModel|\Psr\Http\Message\ResponseInterface
     */
    public function findJobApplicationActivitySettings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindJobApplicationActivitySettings(), $fetch);
    }
    /**
     * 
     *
     * @param int $settingId Activity Setting Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobApplicationActivitySettingNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationActivitySettingModel|\Psr\Http\Message\ResponseInterface
     */
    public function getJobApplicationActivitySetting(int $settingId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplicationActivitySetting($settingId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\DeletedJobApplicationListModel|\Psr\Http\Message\ResponseInterface
     */
    public function deletedJobApplications(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeletedJobApplications(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobApplicationCustomFieldList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplicationCustomFieldList(), $fetch);
    }
    /**
     * 
     *
     * @param int $fieldId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobApplicationCustomFieldListItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobApplicationCustomFieldListItem(int $fieldId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplicationCustomFieldListItem($fieldId), $fetch);
    }
    /**
     * 
     *
     * @param int $fieldId 
     * @param \Varspool\JobAdder\V2\Model\SetJobApplicationCustomFieldListValuesCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutJobApplicationCustomFieldListNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function putJobApplicationCustomFieldList(int $fieldId, \Varspool\JobAdder\V2\Model\SetJobApplicationCustomFieldListValuesCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutJobApplicationCustomFieldList($fieldId, $command), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $statusId 
     *     @var string $name 
     *     @var bool $active 
     *     @var bool $rejected 
     *     @var bool $default 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationStatusListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobApplicationStatusList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplicationStatusList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $statusId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetJobApplicationStatusListItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationStatusRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobApplicationStatusListItem(int $statusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplicationStatusListItem($statusId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationStatusByWorkflowListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getJobApplicationWorkflowList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetJobApplicationWorkflowList(), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $placementId Placement Id
    *     @var array $type Placement Type
    *     @var array $partnerAction.actionId Unique identifier for partner actions
    *     @var array $partnerAction.reference Partner supplied unique reference for the action
    *     @var array $partnerAction.stage Include partner actions at a specific stage
    *     @var array $partnerAction.submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $statusId Placement status
    *     @var array $candidate.candidateId Candidate Id
    *     @var string $candidate.name Candidate name
    *     @var array $candidateId Alias for candidate.candidateId
    *     @var array $company.companyId Companies by Id
    *     @var string $company.name Company name
    *     @var array $companyId Alias for company.companyId
    *     @var array $jobId Job Id
    *     @var array $applicationId Job Application Id
    *     @var array $startDate Search for placements starting in the specified date range
    ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date.
    Specify multiple parameters to search for a range.
    *     @var array $endDate Search for placements ending in the specified date range
    ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date.
    Specify multiple parameters to search for a range.
    *     @var array $folderId Search in specific folders
    *     @var array $userId User Id - search for placements by owner or associated recruiter
    *     @var array $ownerUserId User Id - search for placements by owner
    *     @var array $recruiterUserId User Id - search placements by associated recruiters
    *     @var array $createdBy User Id - search for placements created by the specified user(s)
    *     @var array $createdAt Search for placements created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedBy User Id - search for placements last updated by the specified user(s)
    *     @var array $updatedAt Search for placements updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var bool $approved Search for approved placements
    *     @var array $approvedBy User Id - search for placements approved by the specified user(s)
    *     @var array $approvedAt Search for placements approved at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $export Search for placements that have been flagged by the user for export to integration partners.
    *     @var array $timesheet.period Find placements with timesheets in the specified date range
    ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date.
    Specify multiple parameters to search for a range.
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: partnerActions
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, notes
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\PlacementListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findPlacements(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindPlacements($queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param int $placementId Placement Id
    * @param array $queryParameters {
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: notes
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Varspool\JobAdder\V2\Exception\GetPlacementNotFoundException
    *
    * @return null|\Varspool\JobAdder\V2\Model\PlacementRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getPlacement(int $placementId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacement($placementId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $placementId 
     * @param \Varspool\JobAdder\V2\Model\UpdatePlacementCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdatePlacementNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdatePlacementUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updatePlacement(int $placementId, \Varspool\JobAdder\V2\Model\UpdatePlacementCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdatePlacement($placementId, $body), $fetch);
    }
    /**
    * 
    *
    * @param int $placementId 
    * @param array $queryParameters {
    *     @var array $type Attachment types to include
    *     @var bool $latest Find the latest version of each attachment type
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\PlacementAttachmentListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findPlacementAttachments(int $placementId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindPlacementAttachments($placementId, $queryParameters), $fetch);
    }
    /**
     * Get a placement attachment.<br />Setting the Accept header will attempt a file conversion.
     *
     * @param int $placementId Placement Id
     * @param int $attach Attachment Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetPlacementAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementAttachment(int $placementId, int $attach, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementAttachment($placementId, $attach), $fetch);
    }
    /**
     * 
     *
     * @param int $placementId Placement Id
     * @param string $attach 
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddPlacementAttachmentNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementAttachmentRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addPlacementAttachment(int $placementId, string $attach, array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddPlacementAttachment($placementId, $attach, $formParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $placementId Placement Id
     * @param int $attach Attachment Id
     * @param \Varspool\JobAdder\V2\Model\UpdatePlacementAttachmentCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdatePlacementAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updatePlacementAttachment(int $placementId, int $attach, \Varspool\JobAdder\V2\Model\UpdatePlacementAttachmentCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdatePlacementAttachment($placementId, $attach, $command), $fetch);
    }
    /**
     * Change the placement status and add an optional note
     *
     * @param int $placementId 
     * @param \Varspool\JobAdder\V2\Model\SetPlacementStatusCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutPlacementStatusNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\PutPlacementStatusUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putPlacementStatus(int $placementId, \Varspool\JobAdder\V2\Model\SetPlacementStatusCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutPlacementStatus($placementId, $body), $fetch);
    }
    /**
    * 
    *
    * @param int $placementId Placement Id
    * @param array $queryParameters {
    *     @var array $period Get timesheets for a specific date range
    ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with &lt; or &gt; to search dates before or after (inclusive) the specified date.
    Specify multiple parameters to search for a range.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\PlacementTimesheetListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getPlacementTimesheets(int $placementId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementTimesheets($placementId, $queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param int $placementId Placement Id
    * @param array $queryParameters {
    *     @var array $noteId Note Id
    *     @var array $type Note type
    *     @var array $reference Reference value used to identify a note or group of notes
    *     @var array $createdAt Search for notes created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for notes updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: type, createdAt, updatedAt
    *     @var array $fields Additional fields to include with the results.<br />
    Fields available to include are: text
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\NoteListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getPlacementNotes(int $placementId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementNotes($placementId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $placementId 
     * @param \Varspool\JobAdder\V2\Model\AddPlacementNoteCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddPlacementNoteNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteModel|\Psr\Http\Message\ResponseInterface
     */
    public function addPlacementNote(int $placementId, \Varspool\JobAdder\V2\Model\AddPlacementNoteCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddPlacementNote($placementId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $placementId Placement Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementActivitySummaryListModel|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementActivityByPlacementId(int $placementId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementActivityByPlacementId($placementId), $fetch);
    }
    /**
     * 
     *
     * @param int $placementId Placement Id
     * @param \Varspool\JobAdder\V2\Model\AddPlacementActivityCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddPlacementActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementActivityModel|\Psr\Http\Message\ResponseInterface
     */
    public function addPlacementActivity(int $placementId, \Varspool\JobAdder\V2\Model\AddPlacementActivityCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddPlacementActivity($placementId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $placementId Placement Id
     * @param int $activityId Activity Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetPlacementActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementActivityRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementActivity(int $placementId, int $activityId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementActivity($placementId, $activityId), $fetch);
    }
    /**
     * 
     *
     * @param int $placementId Placement Id
     * @param \Varspool\JobAdder\V2\Model\AddPlacementUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddPlacementUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementUserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function addPlacementUserTask(int $placementId, \Varspool\JobAdder\V2\Model\AddPlacementUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddPlacementUserTask($placementId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $placementId Placement Id
     * @param int $taskId Task Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetPlacementUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementUserTaskRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementUserTask(int $placementId, int $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementUserTask($placementId, $taskId), $fetch);
    }
    /**
     * 
     *
     * @param int $placementId Placement Id
     * @param int $taskId Task Id
     * @param \Varspool\JobAdder\V2\Model\UpdatePlacementUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdatePlacementUserTaskNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdatePlacementUserTaskUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementUserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function updatePlacementUserTask(int $placementId, int $taskId, \Varspool\JobAdder\V2\Model\UpdatePlacementUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdatePlacementUserTask($placementId, $taskId, $command), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $createdAt Search for activities performed at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for activities updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var bool $includeDetails 
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\PlacementActivityListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findPlacementActivity(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindPlacementActivity($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementActivitySettingsListModel|\Psr\Http\Message\ResponseInterface
     */
    public function findPlacementActivitySettings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindPlacementActivitySettings(), $fetch);
    }
    /**
     * 
     *
     * @param int $settingId Activity Setting Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetPlacementActivitySettingNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementActivitySettingModel|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementActivitySetting(int $settingId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementActivitySetting($settingId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\DeletedPlacementListModel|\Psr\Http\Message\ResponseInterface
     */
    public function deletedPlacements(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeletedPlacements(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementCustomFieldList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementCustomFieldList(), $fetch);
    }
    /**
     * 
     *
     * @param int $fieldId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetPlacementCustomFieldItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementCustomFieldItem(int $fieldId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementCustomFieldItem($fieldId), $fetch);
    }
    /**
     * 
     *
     * @param int $fieldId 
     * @param \Varspool\JobAdder\V2\Model\SetPlacementCustomFieldListValuesCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutPlacementCustomFieldListNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function putPlacementCustomFieldList(int $fieldId, \Varspool\JobAdder\V2\Model\SetPlacementCustomFieldListValuesCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutPlacementCustomFieldList($fieldId, $command), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $type Optionally filter to specific attachment types
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementAttachmentCategoryListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementAttachmentCategoryList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementAttachmentCategoryList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\ListOfNameModel|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementAwardList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementAwardList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\ListOfNameModel|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementBillingTermsList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementBillingTermsList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\ListOfNameModel|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementIndustryCodeList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementIndustryCodeList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteTypeListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementNoteTypeList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementNoteTypeList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\ListOfNameModel|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementPaymentTypeList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementPaymentTypeList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $statusId 
     *     @var string $name 
     *     @var bool $active 
     *     @var bool $default 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\StatusListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementStatusList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementStatusList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $statusId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetPlacementStatusItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\StatusRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getPlacementStatusItem(int $statusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPlacementStatusItem($statusId), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $name Company name
    *     @var array $companyId Companies by Id
    *     @var array $parentId Find subsidiaries of specified parent companies
    *     @var array $subsidiaryId Find parents of specified subsidiaries
    *     @var array $statusId Company status
    *     @var array $partnerAction.actionId Unique identifier for partner actions
    *     @var array $partnerAction.reference Partner supplied unique reference for the action
    *     @var array $partnerAction.stage Include partner actions at a specific stage
    *     @var array $partnerAction.submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $folderId Search in specific folders
    *     @var array $createdBy User Id - search for companies created by the specified user(s)
    *     @var array $createdAt Search for companies created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedBy User Id - search for companies last updated by the specified user(s)
    *     @var array $updatedAt Search for companies updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: partnerActions
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, addresses, contacts, subsidiaries, skills, notes, jobs, placements, workflows
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\CompanyListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findCompanies(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindCompanies($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Varspool\JobAdder\V2\Model\AddCompanyCommand $body 
     * @param array $headerParameters {
     *     @var string $X-Allow-Duplicates Duplicate override code from the header of an earlier 409 response
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddCompanyConflictException
     * @throws \Varspool\JobAdder\V2\Exception\AddCompanyUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addCompany(\Varspool\JobAdder\V2\Model\AddCompanyCommand $body, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCompany($body, $headerParameters), $fetch);
    }
    /**
    * 
    *
    * @param int $companyId Company Id
    * @param array $queryParameters {
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: addresses, contacts, subsidiaries, skills, notes, jobs, placements, workflows
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Varspool\JobAdder\V2\Exception\GetCompanyNotFoundException
    *
    * @return null|\Varspool\JobAdder\V2\Model\CompanyRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getCompany(int $companyId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompany($companyId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId 
     * @param \Varspool\JobAdder\V2\Model\UpdateCompanyCommand $body 
     * @param array $headerParameters {
     *     @var string $X-Allow-Duplicates Duplicate override code from the header of an earlier 409 response
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyConflictException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateCompany(int $companyId, \Varspool\JobAdder\V2\Model\UpdateCompanyCommand $body, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateCompany($companyId, $body, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\DeleteCompanyLogoNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCompanyLogo(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeleteCompanyLogo($companyId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param array $queryParameters {
     *     @var int $w Reduce the size of the logo to fit the width specified by w
     *     @var int $h Reduce the size of the logo to fit the height specified by h
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCompanyLogoNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyLogo(int $companyId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyLogo($companyId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param array $queryParameters {
     *     @var int $w Reduce the size of the logo to fit the width specified by w
     *     @var int $h Reduce the size of the logo to fit the height specified by h
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\HeadCompanyLogoNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function headCompanyLogo(int $companyId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\HeadCompanyLogo($companyId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId 
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyLogoNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateCompanyLogo(int $companyId, array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateCompanyLogo($companyId, $formParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyAddressListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyAddresses(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyAddresses($companyId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId 
     * @param \Varspool\JobAdder\V2\Model\AddCompanyAddressCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddCompanyAddressNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyAddressRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addCompanyAddress(int $companyId, \Varspool\JobAdder\V2\Model\AddCompanyAddressCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCompanyAddress($companyId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId 
     * @param string $addressId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\RemoveCompanyAddressNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removeCompanyAddress(int $companyId, string $addressId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\RemoveCompanyAddress($companyId, $addressId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $addressId Address Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCompanyAddressNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyAddressRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyAddress(int $companyId, string $addressId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyAddress($companyId, $addressId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId 
     * @param string $addressId 
     * @param \Varspool\JobAdder\V2\Model\UpdateCompanyAddressCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyAddressNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateCompanyAddress(int $companyId, string $addressId, \Varspool\JobAdder\V2\Model\UpdateCompanyAddressCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateCompanyAddress($companyId, $addressId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CategoryListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanySkills(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanySkills($companyId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanySubsidiaries(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanySubsidiaries($companyId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyContacts(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyContacts($companyId), $fetch);
    }
    /**
    * 
    *
    * @param int $companyId 
    * @param array $queryParameters {
    *     @var array $type Attachment types to include
    *     @var bool $latest Find the latest version of each attachment type
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\CompanyAttachmentListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findCompanyAttachments(int $companyId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindCompanyAttachments($companyId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId 
     * @param int $attach 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCompanyAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyAttachment(int $companyId, int $attach, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyAttachment($companyId, $attach), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $attach 
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddCompanyAttachmentNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyAttachmentRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addCompanyAttachment(int $companyId, string $attach, array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCompanyAttachment($companyId, $attach, $formParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param int $attach Attachment Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCompanyAttachmentCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateCompanyAttachment(int $companyId, int $attach, \Varspool\JobAdder\V2\Model\UpdateCompanyAttachmentCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateCompanyAttachment($companyId, $attach, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyJobOrders(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyJobOrders($companyId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyActiveJobOrders(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyActiveJobOrders($companyId), $fetch);
    }
    /**
     * Change the company status and add an optional note
     *
     * @param int $companyId 
     * @param \Varspool\JobAdder\V2\Model\SetCompanyStatusCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutCompanyStatusNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\PutCompanyStatusUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCompanyStatus(int $companyId, \Varspool\JobAdder\V2\Model\SetCompanyStatusCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutCompanyStatus($companyId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\RequisitionListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyRequisitions(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyRequisitions($companyId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\FloatListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyFloats(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyFloats($companyId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\SubmissionListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanySubmissions(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanySubmissions($companyId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyPlacements(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyPlacements($companyId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyApprovedPlacements(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyApprovedPlacements($companyId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $workflowType Valid values: "Requisition"
     * @param array $queryParameters {
     *     @var array $workflowId 
     *     @var array $include 
     *     @var array $embed Embed related resources within the results.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyWorkflowListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function listCompanyWorkflows(int $companyId, string $workflowType, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\ListCompanyWorkflows($companyId, $workflowType, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $workflowType Valid values: "Requisition"
     * @param \Varspool\JobAdder\V2\Model\AddCompanyWorkflowCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyWorkflowRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addCompanyWorkflow(int $companyId, string $workflowType, \Varspool\JobAdder\V2\Model\AddCompanyWorkflowCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCompanyWorkflow($companyId, $workflowType, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $workflowType Valid values: "Requisition"
     * @param int $workflowId Workflow Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyWorkflowRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyWorkflow(int $companyId, string $workflowType, int $workflowId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyWorkflow($companyId, $workflowType, $workflowId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $workflowType Valid values: "Requisition"
     * @param int $workflowId Workflow Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCompanyWorkflowCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyWorkflowRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function updateCompanyWorkflow(int $companyId, string $workflowType, int $workflowId, \Varspool\JobAdder\V2\Model\UpdateCompanyWorkflowCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateCompanyWorkflow($companyId, $workflowType, $workflowId, $body), $fetch);
    }
    /**
    * 
    *
    * @param int $companyId Company Id
    * @param array $queryParameters {
    *     @var array $noteId Note Id
    *     @var array $type Note type
    *     @var array $reference Reference value used to identify a note or group of notes
    *     @var array $createdAt Search for notes created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for notes updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: type, createdAt, updatedAt
    *     @var array $fields Additional fields to include with the results.<br />
    Fields available to include are: text
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\NoteListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getCompanyNotes(int $companyId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyNotes($companyId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId 
     * @param \Varspool\JobAdder\V2\Model\AddCompanyNoteCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddCompanyNoteNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteModel|\Psr\Http\Message\ResponseInterface
     */
    public function addCompanyNote(int $companyId, \Varspool\JobAdder\V2\Model\AddCompanyNoteCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCompanyNote($companyId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyActivitySummaryListModel|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyActivityByCompanyId(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyActivityByCompanyId($companyId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param \Varspool\JobAdder\V2\Model\AddCompanyActivityCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddCompanyActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyActivityModel|\Psr\Http\Message\ResponseInterface
     */
    public function addCompanyActivity(int $companyId, \Varspool\JobAdder\V2\Model\AddCompanyActivityCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCompanyActivity($companyId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param int $activityId Activity Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCompanyActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyActivityRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyActivity(int $companyId, int $activityId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyActivity($companyId, $activityId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param \Varspool\JobAdder\V2\Model\AddCompanyUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddCompanyUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyUserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function addCompanyUserTask(int $companyId, \Varspool\JobAdder\V2\Model\AddCompanyUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddCompanyUserTask($companyId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param int $taskId Task Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCompanyUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyUserTaskRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyUserTask(int $companyId, int $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyUserTask($companyId, $taskId), $fetch);
    }
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param int $taskId Task Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCompanyUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyUserTaskNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyUserTaskUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyUserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function updateCompanyUserTask(int $companyId, int $taskId, \Varspool\JobAdder\V2\Model\UpdateCompanyUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateCompanyUserTask($companyId, $taskId, $command), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $createdAt Search for activities performed at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for activities updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var bool $includeDetails 
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\CompanyActivityListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findCompanyActivity(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindCompanyActivity($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyActivitySettingsListModel|\Psr\Http\Message\ResponseInterface
     */
    public function findCompanyActivitySettings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindCompanyActivitySettings(), $fetch);
    }
    /**
     * 
     *
     * @param int $settingId Activity Setting Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCompanyActivitySettingNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyActivitySettingModel|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyActivitySetting(int $settingId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyActivitySetting($settingId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\DeletedCompanyListModel|\Psr\Http\Message\ResponseInterface
     */
    public function deletedCompanies(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeletedCompanies(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyCustomFieldList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyCustomFieldList(), $fetch);
    }
    /**
     * 
     *
     * @param int $fieldId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCompanyCustomFieldListItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyCustomFieldListItem(int $fieldId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyCustomFieldListItem($fieldId), $fetch);
    }
    /**
     * 
     *
     * @param int $fieldId 
     * @param \Varspool\JobAdder\V2\Model\SetCompanyCustomFieldListValuesCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutCompanyCustomFieldListNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function putCompanyCustomFieldList(int $fieldId, \Varspool\JobAdder\V2\Model\SetCompanyCustomFieldListValuesCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutCompanyCustomFieldList($fieldId, $command), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $type Optionally filter to specific attachment types
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyAttachmentCategoryListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyAttachmentCategoryList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyAttachmentCategoryList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteTypeListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyNoteTypeList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyNoteTypeList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $statusId 
     *     @var string $name 
     *     @var bool $active 
     *     @var bool $default 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\StatusListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyStatusList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyStatusList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $statusId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCompanyStatusListItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\StatusRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanyStatusListItem(int $statusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCompanyStatusListItem($statusId), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $contactId Contact Id
    *     @var string $name Contact name
    *     @var string $email Contact email
    *     @var string $phone Contact phone or mobile number
    *     @var array $companyId Company Id
    *     @var bool $hiringManager 
    *     @var array $statusId 
    *     @var array $partnerAction.actionId Unique identifier for partner actions
    *     @var array $partnerAction.reference Partner supplied unique reference for the action
    *     @var array $partnerAction.stage Include partner actions at a specific stage
    *     @var array $partnerAction.submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $folderId Search in specific folders
    *     @var array $createdBy User Id - search for contacts created by the specified user(s)
    *     @var array $createdAt Search for contacts created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedBy User Id - search for contacts last updated by the specified user(s)
    *     @var array $updatedAt Search for contacts updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: partnerActions
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, skills, notes, jobs
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\ContactListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findContacts(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindContacts($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Varspool\JobAdder\V2\Model\AddContactCommand $body 
     * @param array $headerParameters {
     *     @var string $X-Allow-Duplicates Duplicate override code from the header of an earlier 409 response
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddContactConflictException
     * @throws \Varspool\JobAdder\V2\Exception\AddContactUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addContact(\Varspool\JobAdder\V2\Model\AddContactCommand $body, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddContact($body, $headerParameters), $fetch);
    }
    /**
    * 
    *
    * @param int $contactId Contact Id
    * @param array $queryParameters {
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: skills, notes, jobs
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Varspool\JobAdder\V2\Exception\GetContactNotFoundException
    *
    * @return null|\Varspool\JobAdder\V2\Model\ContactRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getContact(int $contactId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContact($contactId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId 
     * @param \Varspool\JobAdder\V2\Model\UpdateContactCommand $body 
     * @param array $headerParameters {
     *     @var string $X-Allow-Duplicates Duplicate override code from the header of an earlier 409 response
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateContactNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateContactConflictException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateContactUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateContact(int $contactId, \Varspool\JobAdder\V2\Model\UpdateContactCommand $body, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateContact($contactId, $body, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\DeletteContactPhotoNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deletteContactPhoto(int $contactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeletteContactPhoto($contactId), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param array $queryParameters {
     *     @var int $w Reduce the size of the photo to fit the width specified by w
     *     @var int $h Reduce the size of the photo to fit the height specified by g
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetContactPhotoNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContactPhoto(int $contactId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactPhoto($contactId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param array $queryParameters {
     *     @var int $w Reduce the size of the photo to fit the width specified by w
     *     @var int $h Reduce the size of the photo to fit the height specified by g
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\HeadContactPhotoNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function headContactPhoto(int $contactId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\HeadContactPhoto($contactId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId 
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateContactPhotoNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateContactPhoto(int $contactId, array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateContactPhoto($contactId, $formParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getContactJobOrders(int $contactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactJobOrders($contactId), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getContactActiveJobOrders(int $contactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactActiveJobOrders($contactId), $fetch);
    }
    /**
    * 
    *
    * @param int $contactId Contact Id
    * @param array $queryParameters {
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\InterviewListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getContactInterviews(int $contactId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactInterviews($contactId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CategoryListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getContactSkills(int $contactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactSkills($contactId), $fetch);
    }
    /**
    * 
    *
    * @param int $contactId 
    * @param array $queryParameters {
    *     @var array $type Attachment types to include
    *     @var bool $latest Find the latest version of each attachment type
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\ContactAttachmentListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findContactAttachments(int $contactId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindContactAttachments($contactId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId 
     * @param int $attach 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetContactAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContactAttachment(int $contactId, int $attach, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactAttachment($contactId, $attach), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param string $attach 
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddContactAttachmentNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactAttachmentRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addContactAttachment(int $contactId, string $attach, array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddContactAttachment($contactId, $attach, $formParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param int $attach Attachment Id
     * @param \Varspool\JobAdder\V2\Model\UpdateContactAttachmentCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateContactAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateContactAttachment(int $contactId, int $attach, \Varspool\JobAdder\V2\Model\UpdateContactAttachmentCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateContactAttachment($contactId, $attach, $command), $fetch);
    }
    /**
     * Change the contact status and add an optional note
     *
     * @param int $contactId 
     * @param \Varspool\JobAdder\V2\Model\SetContactStatusCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutContactStatusNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\PutContactStatusUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putContactStatus(int $contactId, \Varspool\JobAdder\V2\Model\SetContactStatusCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutContactStatus($contactId, $body), $fetch);
    }
    /**
    * 
    *
    * @param int $contactId Contact Id
    * @param array $queryParameters {
    *     @var array $noteId Note Id
    *     @var array $type Note type
    *     @var array $reference Reference value used to identify a note or group of notes
    *     @var array $createdAt Search for notes created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for notes updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: type, createdAt, updatedAt
    *     @var array $fields Additional fields to include with the results.<br />
    Fields available to include are: text
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\NoteListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getContactNotes(int $contactId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactNotes($contactId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId 
     * @param \Varspool\JobAdder\V2\Model\AddContactNoteCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddContactNoteNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteModel|\Psr\Http\Message\ResponseInterface
     */
    public function addContactNote(int $contactId, \Varspool\JobAdder\V2\Model\AddContactNoteCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddContactNote($contactId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactActivitySummaryListModel|\Psr\Http\Message\ResponseInterface
     */
    public function getContactActivityByContactId(int $contactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactActivityByContactId($contactId), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param \Varspool\JobAdder\V2\Model\AddContactActivityCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddContactActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactActivityModel|\Psr\Http\Message\ResponseInterface
     */
    public function addContactActivity(int $contactId, \Varspool\JobAdder\V2\Model\AddContactActivityCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddContactActivity($contactId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param int $activityId Activity Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetContactActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactActivityRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getContactActivity(int $contactId, int $activityId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactActivity($contactId, $activityId), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param \Varspool\JobAdder\V2\Model\AddContactUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddContactUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactUserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function addContactUserTask(int $contactId, \Varspool\JobAdder\V2\Model\AddContactUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddContactUserTask($contactId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param int $taskId Task Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetContactUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactUserTaskRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getContactUserTask(int $contactId, int $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactUserTask($contactId, $taskId), $fetch);
    }
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param int $taskId Task Id
     * @param \Varspool\JobAdder\V2\Model\UpdateContactUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateContactUserTaskNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateContactUserTaskUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactUserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function updateContactUserTask(int $contactId, int $taskId, \Varspool\JobAdder\V2\Model\UpdateContactUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateContactUserTask($contactId, $taskId, $command), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $createdAt Search for activities performed at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for activities updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var bool $includeDetails 
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\ContactActivityListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findContactActivity(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindContactActivity($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactActivitySettingsListModel|\Psr\Http\Message\ResponseInterface
     */
    public function findContactActivitySettings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindContactActivitySettings(), $fetch);
    }
    /**
     * 
     *
     * @param int $settingId Activity Setting Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetContactActivitySettingNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactActivitySettingModel|\Psr\Http\Message\ResponseInterface
     */
    public function getContactActivitySetting(int $settingId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactActivitySetting($settingId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\DeletedContactListModel|\Psr\Http\Message\ResponseInterface
     */
    public function deletedContacts(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeletedContacts(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getContactCustomFieldList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactCustomFieldList(), $fetch);
    }
    /**
     * 
     *
     * @param int $fieldId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetContactCustomFieldListItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getContactCustomFieldListItem(int $fieldId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactCustomFieldListItem($fieldId), $fetch);
    }
    /**
     * 
     *
     * @param int $fieldId 
     * @param \Varspool\JobAdder\V2\Model\SetContactCustomFieldListValuesCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PutContactCustomFieldListNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function putContactCustomFieldList(int $fieldId, \Varspool\JobAdder\V2\Model\SetContactCustomFieldListValuesCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutContactCustomFieldList($fieldId, $command), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $type Optionally filter to specific attachment types
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactAttachmentCategoryListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getContactAttachmentCategoryList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactAttachmentCategoryList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteTypeListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getContactNoteTypeList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactNoteTypeList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\ListOfNameModel|\Psr\Http\Message\ResponseInterface
     */
    public function getContactSalutationList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactSalutationList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $statusId 
     *     @var string $name 
     *     @var bool $active 
     *     @var bool $default 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\StatusListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getContactStatusList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactStatusList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $statusId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetContactStatusListItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\StatusRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getContactStatusListItem(int $statusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetContactStatusListItem($statusId), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $noteId Note Id
    *     @var array $type Note type
    *     @var array $reference Reference value used to identify a note or group of notes
    *     @var array $createdAt Search for notes created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for notes updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $candidateId Candidate Id
    *     @var array $companyId Company Id
    *     @var array $contactId Contact Id
    *     @var array $jobId Job Id
    *     @var array $requisitionId Requisition Id
    *     @var array $applicationId Job Application Id
    *     @var array $placementId Placement Id
    *     @var string $entityType Filter notes by Entity Type.<br />
    Entity Type must be any of: candidate, contact, company, job, placement, requisition
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, candidates, contacts, placements, jobs, jobapplications, companies, requisitions
    Note: embed=self everything is embeded by default
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: type, createdAt, updatedAt
    *     @var array $fields Additional fields to include with the results.<br />
    Fields available to include are: text
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\NoteListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findNotes(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindNotes($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Varspool\JobAdder\V2\Model\AddNoteCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteModel|\Psr\Http\Message\ResponseInterface
     */
    public function addNote(\Varspool\JobAdder\V2\Model\AddNoteCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddNote($body), $fetch);
    }
    /**
     * 
     *
     * @param string $noteId Note Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetNoteNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getNote(string $noteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetNote($noteId), $fetch);
    }
    /**
     * 
     *
     * @param string $noteId 
     * @param \Varspool\JobAdder\V2\Model\UpdateNoteCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateNoteNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateNote(string $noteId, \Varspool\JobAdder\V2\Model\UpdateNoteCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateNote($noteId, $body), $fetch);
    }
    /**
     * The file can be submitted either as multipart/form-data with a single part containing only the file, or as binary data
     *
     * @param string $noteId 
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddNoteAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addNoteAttachment(string $noteId, array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddNoteAttachment($noteId, $formParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $noteId Note Id
     * @param string $attachmentId Attachment Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetNoteAttachmentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getNoteAttachment(string $noteId, string $attachmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetNoteAttachment($noteId, $attachmentId), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $folderId Folder Id
    *     @var array $jobId Job Id
    *     @var array $candidateId Candidate Id
    *     @var array $applicationId Job Application Id
    *     @var array $placementId Placement Id
    *     @var array $companyId Company Id
    *     @var array $contactId Contact Id
    *     @var array $userId User Id - search for folders by owner or shared with the specified users
    *     @var array $ownerUserId User Id - search for folders by owner
    *     @var array $sharedWithUserId User Id - search folders shared with the specified users
    *     @var string $ownerStatus Owner status
    *     @var array $createdAt Search for folders created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for folders updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: sharedWith
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, jobs, candidates, applications, contacts, companies, placements
    *     @var string $embedMode Determines what gets returned when embed option is one of self or candidates/contacts/etc.<br />
    Resources available to embedMode are: id
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\FolderListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findFolders(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindFolders($queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param int $folderId Folder Id
    * @param array $queryParameters {
    *     @var string $embedMode Determines what gets returned when embed option is one of self or canddiates/contacts/etc.<br />
    Resources available to embedMode are: id
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Varspool\JobAdder\V2\Exception\GetFolderNotFoundException
    *
    * @return null|\Varspool\JobAdder\V2\Model\FolderRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getFolder(int $folderId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetFolder($folderId, $queryParameters), $fetch);
    }
    /**
     * Allows bulk adding or removing of entities (jobs, candidates, applications, placements, companies and contacts) for a specific folder
     *
     * @param int $folderId Folder Id
     * @param \Varspool\JobAdder\V2\Model\Operation[] $operations 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\PatchFolderNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\PatchFolderUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchFolder(int $folderId, array $operations, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PatchFolder($folderId, $operations), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $userId 
    *     @var array $officeId 
    *     @var array $groupId 
    *     @var array $createdAt Search for users created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedBy User Id - search for jobs last updated by the specified user(s)
    *     @var array $updatedAt Search for users updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $include 
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\UserListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findUsers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindUsers($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $userId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetUserNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\UserRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getUser(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetUser($userId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetCurrentUserNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\UserRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrentUser(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetCurrentUser(), $fetch);
    }
    /**
     * 
     *
     * @param int $userId User Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetUserPhotoNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getUserPhoto(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetUserPhoto($userId), $fetch);
    }
    /**
    * 
    *
    * @param int $userId 
    * @param array $queryParameters {
    *     @var array $startAt Search for tasks starting at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $include 
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\UserTaskListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findUserUserTasks(int $userId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindUserUserTasks($userId, $queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param int $userId User Id
    * @param array $queryParameters {
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\InterviewListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getUserInterviews(int $userId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetUserInterviews($userId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $userId User Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\UserGroupListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getUserUserGroups(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetUserUserGroups($userId), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $groupId 
    *     @var array $userId 
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\UserGroupListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findUserGroups(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindUserGroups($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $groupId Group Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetUserGroupNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\UserGroupRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getUserGroup(int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetUserGroup($groupId), $fetch);
    }
    /**
     * 
     *
     * @param int $groupId Group Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\UserListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getGroupUsers(int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetGroupUsers($groupId), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $officeId 
    *     @var array $userId 
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\UserOfficeListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findUserOffices(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindUserOffices($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $officeId Office Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetUserOfficeNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\UserOfficeRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getUserOffice(int $officeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetUserOffice($officeId), $fetch);
    }
    /**
     * 
     *
     * @param int $officeId Office Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\UserListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getOfficeUsers(int $officeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetOfficeUsers($officeId), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $userId Search for tasks assigned to or owned by the specified users
    *     @var array $startAt Search for tasks starting at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $createdBy User Id - search for companies created by the specified user(s)
    *     @var array $createdAt Search for tasks created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedBy User Id - search for companies last updated by the specified user(s)
    *     @var array $updatedAt Search for tasks updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $include 
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\UserTaskListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findUserTasks(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindUserTasks($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Varspool\JobAdder\V2\Model\AddUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\UserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function addUserTask(\Varspool\JobAdder\V2\Model\AddUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddUserTask($command), $fetch);
    }
    /**
     * 
     *
     * @param int $taskId Task Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\DeleteUserTaskNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUserTask(int $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeleteUserTask($taskId), $fetch);
    }
    /**
     * 
     *
     * @param int $taskId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\UserTaskRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getUserTask(int $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetUserTask($taskId), $fetch);
    }
    /**
     * 
     *
     * @param int $taskId Task Id
     * @param \Varspool\JobAdder\V2\Model\UpdateUserTaskCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateUserTaskNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateUserTaskUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\UserTaskModel|\Psr\Http\Message\ResponseInterface
     */
    public function updateUserTask(int $taskId, \Varspool\JobAdder\V2\Model\UpdateUserTaskCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateUserTask($taskId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $taskId Task Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\MarkCompleteUserTaskNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function markCompleteUserTask(int $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\MarkCompleteUserTask($taskId), $fetch);
    }
    /**
     * 
     *
     * @param int $taskId Task Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\MarkIncompleteUserTaskNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function markIncompleteUserTask(int $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\MarkIncompleteUserTask($taskId), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $interviewId 
    *     @var array $jobId 
    *     @var array $userId User Id - search for internal/user interviewers
    *     @var array $contactId Contact Id - search for external/contact interviewers
    *     @var array $candidateId Candidate Id - search for interviewees by candidateId
    *     @var array $applicationId Application Id - search for interviewees by applicationId
    *     @var array $type 
    *     @var array $startAt Search for interviews starting at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $endAt Search for interviews ending at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var string $location 
    *     @var array $createdBy User Id - search for interviews created by the specified user(s)
    *     @var array $createdAt Search for interviews created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, evaluations
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\InterviewListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findInterviews(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindInterviews($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $interviewId Interview Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\DeleteInterviewNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInterview(int $interviewId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeleteInterview($interviewId), $fetch);
    }
    /**
    * 
    *
    * @param int $interviewId Interview Id
    * @param int $applicationId Job Application Id
    * @param array $queryParameters {
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: evaluations
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Varspool\JobAdder\V2\Exception\GetInterviewNotFoundException
    *
    * @return null|\Varspool\JobAdder\V2\Model\InterviewRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getInterview(int $interviewId, int $applicationId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetInterview($interviewId, $applicationId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $interviewId 
     * @param int $applicationId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewEvaluationListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getInterviewEvaluations(int $interviewId, int $applicationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetInterviewEvaluations($interviewId, $applicationId), $fetch);
    }
    /**
     * 
     *
     * @param int $interviewId 
     * @param int $applicationId 
     * @param int $contactId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewEvaluationRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getExternalInterviewEvaluation(int $interviewId, int $applicationId, int $contactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetExternalInterviewEvaluation($interviewId, $applicationId, $contactId), $fetch);
    }
    /**
     * 
     *
     * @param int $interviewId 
     * @param int $applicationId 
     * @param int $contactId 
     * @param \Varspool\JobAdder\V2\Model\SubmitInterviewEvaluationCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewEvaluationRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function putExternalInterviewEvaluation(int $interviewId, int $applicationId, int $contactId, \Varspool\JobAdder\V2\Model\SubmitInterviewEvaluationCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutExternalInterviewEvaluation($interviewId, $applicationId, $contactId, $command), $fetch);
    }
    /**
     * 
     *
     * @param int $interviewId 
     * @param int $applicationId 
     * @param int $userId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewEvaluationRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getInternalInterviewEvaluation(int $interviewId, int $applicationId, int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetInternalInterviewEvaluation($interviewId, $applicationId, $userId), $fetch);
    }
    /**
     * 
     *
     * @param int $interviewId 
     * @param int $applicationId 
     * @param int $userId 
     * @param \Varspool\JobAdder\V2\Model\SubmitInterviewEvaluationCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewEvaluationRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function putInternalInterviewEvaluation(int $interviewId, int $applicationId, int $userId, \Varspool\JobAdder\V2\Model\SubmitInterviewEvaluationCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\PutInternalInterviewEvaluation($interviewId, $applicationId, $userId, $command), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $categoryId 
    *     @var array $embed 
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\CategoryListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function findCategories(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindCategories($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $code 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\CountryListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function findCountries(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindCountries($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $locationId 
     *     @var array $embed 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\LocationListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function findLocations(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindLocations($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $workTypeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\WorkTypeListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function findWorkTypes(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindWorkTypes($queryParameters), $fetch);
    }
    /**
     * Find candidates, contacts or users by email address.
     *
     * @param array $queryParameters {
     *     @var string $email Email address to search for.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\MatchedByEmailAddressModel|\Psr\Http\Message\ResponseInterface
     */
    public function findEmailAddress(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindEmailAddress($queryParameters), $fetch);
    }
    /**
     * Find candidates, contacts, companies or users by phone number.
     *
     * @param array $queryParameters {
     *     @var string $e164 [E.164 format phone number](https://en.wikipedia.org/wiki/E.164) to search for.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\MatchedByPhoneNumberModel|\Psr\Http\Message\ResponseInterface
     */
    public function findPhoneNumber(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindPhoneNumber($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $actionType Type of action
     *     @var array $actionId Unique identifier for partner actions
     *     @var array $reference Partner supplied unique reference for the action
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\PartnerActionListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function findPartnerActions(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindPartnerActions($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $act Action Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\DeletePartnerActionNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deletePartnerAction(string $act, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeletePartnerAction($act), $fetch);
    }
    /**
     * 
     *
     * @param string $act Action Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\GetPartnerActionNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\PartnerActionRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getPartnerAction(string $act, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPartnerAction($act), $fetch);
    }
    /**
     * 
     *
     * @param string $act Action type. The type cannot be changed once assigned.
     * @param \Varspool\JobAdder\V2\Model\AddPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\PartnerActionRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addPartnerAction(string $act, \Varspool\JobAdder\V2\Model\AddPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddPartnerAction($act, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $act Action Id
     * @param \Varspool\JobAdder\V2\Model\UpdatePartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdatePartnerActionNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\PartnerActionRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function updatePartnerAction(string $act, \Varspool\JobAdder\V2\Model\UpdatePartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdatePartnerAction($act, $command), $fetch);
    }
    /**
    * 
    *
    * @param string $actionId Action Id
    * @param array $queryParameters {
    *     @var array $stage Include partner actions at a specific stage
    *     @var array $submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getPartnerActionJobApplications(string $actionId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPartnerActionJobApplications($actionId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $applicationId Job Application Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobApplicationPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function completeJobApplicationPartnerAction(string $actionId, int $applicationId, \Varspool\JobAdder\V2\Model\UpdateJobApplicationPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\CompleteJobApplicationPartnerAction($actionId, $applicationId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $applicationId Job Application Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobApplicationPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function progressJobApplicationPartnerAction(string $actionId, int $applicationId, \Varspool\JobAdder\V2\Model\UpdateJobApplicationPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\ProgressJobApplicationPartnerAction($actionId, $applicationId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $applicationId Job Application Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobApplicationPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rejectJobApplicationPartnerAction(string $actionId, int $applicationId, \Varspool\JobAdder\V2\Model\UpdateJobApplicationPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\RejectJobApplicationPartnerAction($actionId, $applicationId, $command), $fetch);
    }
    /**
    * 
    *
    * @param string $actionId Action Id
    * @param array $queryParameters {
    *     @var array $stage Include partner actions at a specific stage
    *     @var array $submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\CandidateListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getPartnerActionCandidates(string $actionId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPartnerActionCandidates($actionId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $candidateId Candidate Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCandidatePartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function completeCandidatePartnerAction(string $actionId, int $candidateId, \Varspool\JobAdder\V2\Model\UpdateCandidatePartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\CompleteCandidatePartnerAction($actionId, $candidateId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $candidateId Candidate Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCandidatePartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function progressCandidatePartnerAction(string $actionId, int $candidateId, \Varspool\JobAdder\V2\Model\UpdateCandidatePartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\ProgressCandidatePartnerAction($actionId, $candidateId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $candidateId Candidate Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCandidatePartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rejectCandidatePartnerAction(string $actionId, int $candidateId, \Varspool\JobAdder\V2\Model\UpdateCandidatePartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\RejectCandidatePartnerAction($actionId, $candidateId, $command), $fetch);
    }
    /**
    * 
    *
    * @param string $actionId Action Id
    * @param array $queryParameters {
    *     @var array $stage Include partner actions at a specific stage
    *     @var array $submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\CompanyListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getPartnerActionCompanies(string $actionId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPartnerActionCompanies($actionId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $companyId Company Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCompanyPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function completeCompanyPartnerAction(string $actionId, int $companyId, \Varspool\JobAdder\V2\Model\UpdateCompanyPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\CompleteCompanyPartnerAction($actionId, $companyId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $companyId Company Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCompanyPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function progressCompanyPartnerAction(string $actionId, int $companyId, \Varspool\JobAdder\V2\Model\UpdateCompanyPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\ProgressCompanyPartnerAction($actionId, $companyId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $companyId Company Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCompanyPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rejectCompanyPartnerAction(string $actionId, int $companyId, \Varspool\JobAdder\V2\Model\UpdateCompanyPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\RejectCompanyPartnerAction($actionId, $companyId, $command), $fetch);
    }
    /**
    * 
    *
    * @param string $actionId Action Id
    * @param array $queryParameters {
    *     @var array $stage Include partner actions at a specific stage
    *     @var array $submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\ContactListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getPartnerActionContacts(string $actionId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPartnerActionContacts($actionId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $contactId Contact Id
     * @param \Varspool\JobAdder\V2\Model\UpdateContactPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function completeContactPartnerAction(string $actionId, int $contactId, \Varspool\JobAdder\V2\Model\UpdateContactPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\CompleteContactPartnerAction($actionId, $contactId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $contactId Contact Id
     * @param \Varspool\JobAdder\V2\Model\UpdateContactPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function progressContactPartnerAction(string $actionId, int $contactId, \Varspool\JobAdder\V2\Model\UpdateContactPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\ProgressContactPartnerAction($actionId, $contactId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $contactId Contact Id
     * @param \Varspool\JobAdder\V2\Model\UpdateContactPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rejectContactPartnerAction(string $actionId, int $contactId, \Varspool\JobAdder\V2\Model\UpdateContactPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\RejectContactPartnerAction($actionId, $contactId, $command), $fetch);
    }
    /**
    * 
    *
    * @param string $actionId Action Id
    * @param array $queryParameters {
    *     @var array $stage Include partner actions at a specific stage
    *     @var array $submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobAdListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getPartnerActionJobAds(string $actionId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPartnerActionJobAds($actionId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $adId Job Ad Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobAdPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function completeJobAdPartnerAction(string $actionId, int $adId, \Varspool\JobAdder\V2\Model\UpdateJobAdPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\CompleteJobAdPartnerAction($actionId, $adId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $adId Job Ad Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobAdPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function progressJobAdPartnerAction(string $actionId, int $adId, \Varspool\JobAdder\V2\Model\UpdateJobAdPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\ProgressJobAdPartnerAction($actionId, $adId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $adId Job Ad Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobAdPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rejectJobAdPartnerAction(string $actionId, int $adId, \Varspool\JobAdder\V2\Model\UpdateJobAdPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\RejectJobAdPartnerAction($actionId, $adId, $command), $fetch);
    }
    /**
    * 
    *
    * @param string $actionId Action Id
    * @param array $queryParameters {
    *     @var array $stage Include partner actions at a specific stage
    *     @var array $submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\JobOrderListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getPartnerActionJobOrders(string $actionId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPartnerActionJobOrders($actionId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $jobId Job Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobOrderPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function completeJobOrderPartnerAction(string $actionId, int $jobId, \Varspool\JobAdder\V2\Model\UpdateJobOrderPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\CompleteJobOrderPartnerAction($actionId, $jobId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $jobId Job Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobOrderPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function progressJobOrderPartnerAction(string $actionId, int $jobId, \Varspool\JobAdder\V2\Model\UpdateJobOrderPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\ProgressJobOrderPartnerAction($actionId, $jobId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $jobId Job Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobOrderPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rejectJobOrderPartnerAction(string $actionId, int $jobId, \Varspool\JobAdder\V2\Model\UpdateJobOrderPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\RejectJobOrderPartnerAction($actionId, $jobId, $command), $fetch);
    }
    /**
    * 
    *
    * @param string $actionId Action Id
    * @param array $queryParameters {
    *     @var array $stage Include partner actions at a specific stage
    *     @var array $submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Varspool\JobAdder\V2\Model\PlacementListRepresentation|\Psr\Http\Message\ResponseInterface
    */
    public function getPartnerActionPlacements(string $actionId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetPartnerActionPlacements($actionId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $placementId Placement Id
     * @param \Varspool\JobAdder\V2\Model\UpdatePlacementPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function completePlacementPartnerAction(string $actionId, int $placementId, \Varspool\JobAdder\V2\Model\UpdatePlacementPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\CompletePlacementPartnerAction($actionId, $placementId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $placementId Placement Id
     * @param \Varspool\JobAdder\V2\Model\UpdatePlacementPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function progressPlacementPartnerAction(string $actionId, int $placementId, \Varspool\JobAdder\V2\Model\UpdatePlacementPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\ProgressPlacementPartnerAction($actionId, $placementId, $command), $fetch);
    }
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $placementId Placement Id
     * @param \Varspool\JobAdder\V2\Model\UpdatePlacementPartnerActionCommand $command 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rejectPlacementPartnerAction(string $actionId, int $placementId, \Varspool\JobAdder\V2\Model\UpdatePlacementPartnerActionCommand $command, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\RejectPlacementPartnerAction($actionId, $placementId, $command), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $status 
     *     @var array $events 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\WebhookListRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function findWebhooks(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\FindWebhooks($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Varspool\JobAdder\V2\Model\AddWebhookCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\AddWebhookUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\WebhookRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function addWebhook(\Varspool\JobAdder\V2\Model\AddWebhookCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\AddWebhook($body), $fetch);
    }
    /**
     * 
     *
     * @param string $webhookId Webhook Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\DeleteWebhookNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteWebhook(string $webhookId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\DeleteWebhook($webhookId), $fetch);
    }
    /**
     * 
     *
     * @param string $webhookId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Varspool\JobAdder\V2\Model\WebhookRepresentation|\Psr\Http\Message\ResponseInterface
     */
    public function getWebhook(string $webhookId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\GetWebhook($webhookId), $fetch);
    }
    /**
     * 
     *
     * @param string $webhookId 
     * @param \Varspool\JobAdder\V2\Model\UpdateWebhookCommand $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Varspool\JobAdder\V2\Exception\UpdateWebhookNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateWebhookUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateWebhook(string $webhookId, \Varspool\JobAdder\V2\Model\UpdateWebhookCommand $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Varspool\JobAdder\V2\Endpoint\UpdateWebhook($webhookId, $body), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.jobadder.com/v2');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Varspool\JobAdder\V2\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}