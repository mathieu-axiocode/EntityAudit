<?php
namespace EntityAudit\src\SimpleThings\EntityAudit;

class RevisionCriteria
{
    protected $dateFrom;
    protected $dateTo;
    protected $username;

    /**
     * Gets the value of dateFrom.
     *
     * @return mixed
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets the value of dateFrom.
     *
     * @param mixed $dateFrom the date from
     *
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom = null)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Gets the value of dateTo.
     *
     * @return mixed
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets the value of dateTo.
     *
     * @param mixed $dateTo the date to
     *
     * @return self
     */
    public function setDateTo(\DateTime $dateTo = null)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Gets the value of username.
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the value of username.
     *
     * @param mixed $username the username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
}
