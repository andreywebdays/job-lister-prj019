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

    // create job
    public function createJob($data)
    {
        // insert query
        $this->db->query("INSERT INTO jobs (category_id, job_title, job_company, 
            job_desc, job_location, job_salary, job_contact_user, job_contact_email)
            VALUES (:category_id, :job_title, :job_company, :job_desc, 
            :job_location, :job_salary, :job_contact_user, :job_contact_email);");

        // bind data
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':job_company', $data['job_company']);
        $this->db->bind(':job_desc', $data['job_desc']);
        $this->db->bind(':job_location', $data['job_location']);
        $this->db->bind(':job_salary', $data['job_salary']);
        $this->db->bind(':job_contact_user', $data['job_contact_user']);
        $this->db->bind(':job_contact_email', $data['job_contact_email']);

        // execute
        if ($this->db->execute()) 
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}