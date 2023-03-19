<?php

namespace Varspool\JobAdder\V2\Model;

class UserGroupRepresentation
{
    /**
     * 
     *
     * @var int
     */
    protected $groupId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * Users belonging to the group
     *
     * @var UserSummaryModel[]
     */
    protected $users;
    /**
     * 
     *
     * @var UserGroupLinks
     */
    protected $links;
    /**
     * 
     *
     * @return int
     */
    public function getGroupId() : int
    {
        return $this->groupId;
    }
    /**
     * 
     *
     * @param int $groupId
     *
     * @return self
     */
    public function setGroupId(int $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Users belonging to the group
     *
     * @return UserSummaryModel[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * Users belonging to the group
     *
     * @param UserSummaryModel[] $users
     *
     * @return self
     */
    public function setUsers(array $users) : self
    {
        $this->users = $users;
        return $this;
    }
    /**
     * 
     *
     * @return UserGroupLinks
     */
    public function getLinks() : UserGroupLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param UserGroupLinks $links
     *
     * @return self
     */
    public function setLinks(UserGroupLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}