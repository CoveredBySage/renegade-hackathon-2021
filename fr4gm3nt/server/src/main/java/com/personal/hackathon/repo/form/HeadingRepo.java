package com.personal.hackathon.repo.form;

import com.personal.hackathon.model.form.Heading;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface HeadingRepo extends JpaRepository<Heading, Integer> {
}
