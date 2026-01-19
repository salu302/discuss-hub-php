-- Sample Categories
INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Web Development'),
(2, 'Mobile Development'),
(3, 'Database Design'),
(4, 'Programming Languages'),
(5, 'DevOps & Cloud'),
(6, 'UI/UX Design'),
(7, 'Machine Learning'),
(8, 'Security')
ON DUPLICATE KEY UPDATE `name`=`name`;

-- Sample Users
INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`) VALUES
(1, 'john_developer', 'john@example.com', 'password123', '123 Tech Street'),
(2, 'sarah_designer', 'sarah@example.com', 'password123', '456 Design Avenue'),
(3, 'mike_fullstack', 'mike@example.com', 'password123', '789 Code Boulevard')
ON DUPLICATE KEY UPDATE `username`=`username`;

-- Sample Questions
INSERT INTO `questions` (`id`, `title`, `description`, `category_id`, `user_id`) VALUES
(1, 'How to implement JWT authentication in PHP?', 'I am building a REST API using PHP and want to implement JWT authentication. Can anyone guide me through the process?', 1, 1),
(2, 'Best practices for responsive design in 2024', 'What are the current best practices for creating responsive websites? Should we focus on mobile-first approach?', 6, 2),
(3, 'Choosing between React and Vue.js', 'I am starting a new project and unsure whether to use React or Vue.js. What are the pros and cons of each?', 1, 1),
(4, 'How to optimize database queries for better performance?', 'My application is running slow due to database queries. What optimization techniques should I use?', 3, 3),
(5, 'Introduction to Docker and Containerization', 'I want to learn Docker for my development workflow. Where should I start?', 5, 2),
(6, 'Best JavaScript frameworks for 2024', 'There are so many JS frameworks nowadays. Which ones should I focus on learning?', 4, 3),
(7, 'How to secure a PHP application?', 'What are the essential security measures I should implement in my PHP application?', 1, 1),
(8, 'Getting started with Machine Learning in Python', 'I am interested in ML but don\'t know where to begin. Can anyone recommend resources?', 7, 2),
(9, 'Difference between SQL and NoSQL databases', 'When should I use SQL vs NoSQL? What are the key differences?', 3, 3),
(10, 'API rate limiting and throttling best practices', 'How should I implement rate limiting in my REST API to prevent abuse?', 1, 1)
ON DUPLICATE KEY UPDATE `title`=`title`;

-- Sample Answers
INSERT INTO `answers` (`id`, `answer`, `question_id`, `user_id`) VALUES
(1, 'JWT (JSON Web Tokens) is a great choice for stateless authentication. You can use libraries like firebase/php-jwt. First, install via composer, then generate tokens on login and verify them on protected routes.', 1, 2),
(2, 'For JWT implementation, I recommend: 1) Use RS256 for better security, 2) Store tokens in httpOnly cookies, 3) Implement token refresh mechanism, 4) Always validate token signature.', 1, 3),
(3, 'Mobile-first approach is definitely the way to go in 2024. Design for mobile first, then enhance for larger screens. Use CSS Grid and Flexbox for responsive layouts. Also implement proper media queries.', 6, 1),
(4, 'React has a larger ecosystem and more job opportunities. Vue is easier to learn and has better documentation. Both are excellent choices. Consider your project requirements and team experience.', 3, 2),
(5, 'Use database indexing on frequently queried columns. Avoid SELECT * queries, fetch only needed columns. Use EXPLAIN to analyze query performance. Consider query caching mechanisms.', 4, 1),
(6, 'Docker revolutionized development workflow! Start with the official Docker tutorial. Key concepts: Images, Containers, and Docker Compose. Once you understand these, you\'ll be able to containerize any application.', 5, 3),
(7, 'Modern JavaScript frameworks to focus on: 1) React - most popular, 2) Vue - easier learning curve, 3) Angular - enterprise level, 4) Svelte - emerging favorite. Choose based on your needs.', 6, 2),
(8, 'Security essentials for PHP: 1) Input validation and sanitization, 2) Use prepared statements to prevent SQL injection, 3) Implement CSRF protection, 4) Use HTTPS, 5) Keep dependencies updated.', 7, 1),
(9, 'Start with Python because of its simplicity and ML libraries like TensorFlow, Scikit-learn, and PyTorch. Kaggle is a great platform to practice. Also, take Andrew Ng\'s Machine Learning course on Coursera.', 8, 2),
(10, 'SQL for structured data with ACID properties. NoSQL for unstructured data and horizontal scaling. Common comparison: PostgreSQL vs MongoDB. Your choice depends on data structure and scalability needs.', 9, 3)
ON DUPLICATE KEY UPDATE `answer`=`answer`;
