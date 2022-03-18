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

    // get all categories
    public function getCategories()
    {
        $this->db->query("SELECT * FROM categories;");

        // assign the result set
        $results = $this->db->resultSet();

        return $results;
    }

    // get jobs by category
    public function getByCategory($category)
    {
        $this->db->query("SELECT jobs.*, categories.category_name AS cname 
            FROM jobs INNER JOIN categories
            ON jobs.category_id = categories.category_id
            WHERE jobs.category_id = '$category'
            ORDER by job_post_date DESC;");

        // assign the result set
        $results = $this->db->resultSet();

        return $results;
    }

    // get category
    public function getCategory($category_id)
    {
        $this->db->query("SELECT * FROM categories
            WHERE category_id = :category_id;");

        $this->db->bind(':category_id', $category_id);

        // assign the row
        $row = $this->db->single();

        return $row;
    }

    // get job listing
    public function getJob($job_id)
    {
        $this->db->query("SELECT * FROM jobs
        WHERE job_id = :job_id;");

        $this->db->bind(':job_id', $job_id);

        // assign the row
        $row = $this->db->single();

        return $row;
    }

}