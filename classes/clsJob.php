<?php

class clsJob
{
    private $db;

    public function __construct()
    {
        $this->db = new clsDBH;
    }

    // get all jobs
    public function getAllJobs()
    {
        $this->db->query("SELECT jobs.*, categories.category_name AS cname 
            FROM jobs INNER JOIN categories
            ON jobs.category_id = categories.category_id
            ORDER by job_post_date DESC;");

        // assign the result set
        $results = $this->db->resultSet();

        return $results;
    }
}