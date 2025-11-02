# rac-interview-system

## Overview
The RAC Interview System is designed to streamline the recruitment and assessment process by matching candidates with subject experts for interviews. The system evaluates the expertise of candidates and experts, providing a relevancy score to facilitate effective interview board formation.

## Features
- **Expert Management**: Add, update, and retrieve expert information.
- **Candidate Management**: Add, update, and retrieve candidate information.
- **Board Management**: Create and manage interview boards with selected experts.
- **Matching Algorithm**: Calculate matching and relevancy scores based on profiles.

## Setup Instructions
1. **Clone the Repository**:
   ```bash
   git clone <repository-url>
   cd rac-interview-system
   ```

2. **Database Configuration**:
   - Update the database connection settings in `src/config/database.php` to match your XAMPP setup.

3. **Create Database**:
   - Execute the SQL schema in `sql/schema.sql` to create the necessary tables.

4. **Run the Application**:
   - Start the XAMPP server and navigate to `public/index.php` in your web browser.

## Usage Guidelines
- Use the provided controllers to manage experts, candidates, and boards.
- The matching process can be initiated through the MatchingController.

## Contributing
Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.

## License
This project is licensed under the MIT License.