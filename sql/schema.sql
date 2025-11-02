CREATE TABLE experts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    expertise_area VARCHAR(255) NOT NULL
);

CREATE TABLE candidates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    area_of_expertise VARCHAR(255) NOT NULL
);

CREATE TABLE boards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(255) NOT NULL,
    members TEXT NOT NULL
);

CREATE TABLE matches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    expert_id INT NOT NULL,
    candidate_id INT NOT NULL,
    matching_score FLOAT NOT NULL,
    relevancy_score FLOAT NOT NULL,
    FOREIGN KEY (expert_id) REFERENCES experts(id),
    FOREIGN KEY (candidate_id) REFERENCES candidates(id)
);