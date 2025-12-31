<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        // Angular
        Course::create([
            'title' => 'Angular JS',
            'description' => 'Master Angular framework from scratch. Build dynamic single-page applications with TypeScript, RxJS, and modern web development practices.',
            'price' => 99.99,
            'duration_hours' => 45,
            'level' => 'Intermediate',
            'status' => 'opened',
            'instructor_id' => 1,
            'objectives' => [
                'Utilizing Angular 18 features adequately',
                'Optimizing web apps performance capabilities',
                'Awareness of getting to be purely gifted with SPA APIs',
                'Understanding two-way [properties] bound',
                'Designing the scalable and secure applications',
                'Developing conditions with injection frameworks',
                'Decoding test software during the SLLC',
                'Solving more troublesome scenarios through debugging the application',
                'Building different design (3) orders',
                'Operating new development or editing or deploying the application',
                'Organizing, managing, and alternator sending the application'
            ],
            'curriculum' => [
                'HTML',
                'CSS',
                'JavaScript',
                'TypeScript',
                'NodeJs',
                'Angular JS',
                'Git/GitHub',
                'MVC Architecture',
                'Structure',
                'Modules',
                'Dependency injection'
            ],
            'projects' => [
                ['title' => 'Angular Hello World Template', 'description' => 'Basic starter project', 'icon' => '📱'],
                ['title' => 'Angular Basic 02 Forms', 'description' => 'Form handling basics', 'icon' => '🎯'],
                ['title' => 'Loan Blended 05 Forms', 'description' => 'Advanced forms', 'icon' => '🔄'],
                ['title' => 'Angular Products 04 Local Storage', 'description' => 'Data persistence', 'icon' => '💾'],
                ['title' => 'Angular 03 To Do Multiple', 'description' => 'Task management', 'icon' => '📋'],
                ['title' => 'Portfolio 06 Structure', 'description' => 'Portfolio website', 'icon' => '🎨'],
                ['title' => 'Data Blending 07 Structure', 'description' => 'E-commerce features', 'icon' => '🛒'],
                ['title' => 'Admin-Panel Framework', 'description' => 'Admin dashboard', 'icon' => '🏗️']
            ],
            'tools' => [
                ['name' => 'UI Design', 'icon' => 'fas fa-pencil-ruler'],
                ['name' => 'Git', 'icon' => 'fab fa-git-alt'],
                ['name' => 'Code Editor', 'icon' => 'fas fa-code'],
                ['name' => 'Testing', 'icon' => 'fas fa-vial'],
                ['name' => 'Angular', 'icon' => 'fab fa-angular'],
                ['name' => 'TypeScript', 'icon' => 'fas fa-file-code']
            ]
        ]);

        // AWS
        Course::create([
            'title' => 'AWS',
            'description' => 'Complete AWS Cloud Computing course. Learn EC2, S3, Lambda, RDS, and prepare for AWS Certified Solutions Architect certification.',
            'price' => 149.99,
            'duration_hours' => 60,
            'level' => 'Advanced',
            'status' => 'opened',
            'instructor_id' => 2,
            'objectives' => [
                'Master AWS core services and architecture',
                'Deploy scalable cloud applications',
                'Implement security best practices',
                'Optimize cloud infrastructure costs',
                'Prepare for AWS certification exams',
                'Build serverless applications',
                'Configure auto-scaling and load balancing',
                'Manage databases in the cloud',
                'Implement CI/CD pipelines',
                'Monitor and troubleshoot AWS resources'
            ],
            'curriculum' => [
                'Cloud Computing Basics',
                'AWS Global Infrastructure',
                'EC2 - Elastic Compute Cloud',
                'S3 - Simple Storage Service',
                'RDS - Relational Database Service',
                'Lambda - Serverless Computing',
                'VPC - Virtual Private Cloud',
                'IAM - Identity and Access Management',
                'CloudFormation',
                'Monitoring and Logging',
                'Cost Optimization'
            ],
            'projects' => [
                ['title' => 'Static Website Hosting', 'description' => 'Deploy on S3', 'icon' => '🌐'],
                ['title' => 'EC2 Web Server', 'description' => 'Setup and configure', 'icon' => '🖥️'],
                ['title' => 'Serverless API', 'description' => 'Using Lambda', 'icon' => '⚡'],
                ['title' => 'Database Migration', 'description' => 'Move to RDS', 'icon' => '💾'],
                ['title' => 'Auto Scaling App', 'description' => 'High availability', 'icon' => '📈'],
                ['title' => 'CloudFormation Stack', 'description' => 'Infrastructure as code', 'icon' => '🏗️']
            ],
            'tools' => [
                ['name' => 'AWS Console', 'icon' => 'fab fa-aws'],
                ['name' => 'CLI', 'icon' => 'fas fa-terminal'],
                ['name' => 'CloudFormation', 'icon' => 'fas fa-cloud'],
                ['name' => 'Docker', 'icon' => 'fab fa-docker'],
                ['name' => 'Terraform', 'icon' => 'fas fa-cubes'],
                ['name' => 'Git', 'icon' => 'fab fa-git-alt']
            ]
        ]);

        // Vue JS
        Course::create([
            'title' => 'Vue JS',
            'description' => 'Build modern reactive web applications with Vue 3. Learn Composition API, Vuex state management, and Vue Router for SPA development.',
            'price' => 89.99,
            'duration_hours' => 40,
            'level' => 'Beginner',
            'status' => 'opened',
            'instructor_id' => 1,
            'objectives' => [
                'Master Vue 3 Composition API',
                'Build reactive user interfaces',
                'Implement state management with Vuex',
                'Create single-page applications',
                'Handle routing with Vue Router',
                'Optimize application performance',
                'Use Vue directives effectively',
                'Integrate with REST APIs',
                'Deploy Vue applications',
                'Write clean and maintainable code'
            ],
            'curriculum' => [
                'HTML & CSS Basics',
                'JavaScript ES6+',
                'Vue Fundamentals',
                'Components & Props',
                'Composition API',
                'Reactive Data',
                'Vue Router',
                'Vuex State Management',
                'API Integration',
                'Deployment',
                'Best Practices'
            ],
            'projects' => [
                ['title' => 'Todo List App', 'description' => 'Basic CRUD operations', 'icon' => '✅'],
                ['title' => 'Weather Dashboard', 'description' => 'API integration', 'icon' => '🌤️'],
                ['title' => 'E-commerce Store', 'description' => 'Shopping cart', 'icon' => '🛍️'],
                ['title' => 'Blog Platform', 'description' => 'CMS features', 'icon' => '📝'],
                ['title' => 'Social Media App', 'description' => 'Real-time updates', 'icon' => '💬'],
                ['title' => 'Portfolio Website', 'description' => 'Personal showcase', 'icon' => '🎨']
            ],
            'tools' => [
                ['name' => 'Vue 3', 'icon' => 'fab fa-vuejs'],
                ['name' => 'Vite', 'icon' => 'fas fa-bolt'],
                ['name' => 'VS Code', 'icon' => 'fas fa-code'],
                ['name' => 'Git', 'icon' => 'fab fa-git-alt'],
                ['name' => 'npm', 'icon' => 'fab fa-npm'],
                ['name' => 'Chrome DevTools', 'icon' => 'fab fa-chrome']
            ]
        ]);

        // Power BI
        Course::create([
            'title' => 'Power BI',
            'description' => 'Master business intelligence and data visualization. Create interactive dashboards, reports, and data models with Microsoft Power BI.',
            'price' => 119.99,
            'duration_hours' => 35,
            'level' => 'Beginner',
            'status' => 'opened',
            'instructor_id' => 3,
            'objectives' => [
                'Create interactive dashboards',
                'Connect to multiple data sources',
                'Transform and clean data',
                'Build data models and relationships',
                'Use DAX for calculations',
                'Design compelling visualizations',
                'Share reports and dashboards',
                'Implement row-level security',
                'Schedule data refreshes',
                'Optimize report performance'
            ],
            'curriculum' => [
                'Power BI Introduction',
                'Data Sources & Import',
                'Power Query Editor',
                'Data Modeling',
                'DAX Fundamentals',
                'Visualizations',
                'Dashboards',
                'Power BI Service',
                'Sharing & Collaboration',
                'Mobile Reports',
                'Best Practices'
            ],
            'projects' => [
                ['title' => 'Sales Dashboard', 'description' => 'KPI tracking', 'icon' => '📊'],
                ['title' => 'Financial Report', 'description' => 'Budget analysis', 'icon' => '💰'],
                ['title' => 'HR Analytics', 'description' => 'Employee insights', 'icon' => '👥'],
                ['title' => 'Marketing Dashboard', 'description' => 'Campaign performance', 'icon' => '📈'],
                ['title' => 'Inventory Management', 'description' => 'Stock tracking', 'icon' => '📦'],
                ['title' => 'Customer Analysis', 'description' => 'Behavior patterns', 'icon' => '🎯']
            ],
            'tools' => [
                ['name' => 'Power BI Desktop', 'icon' => 'fas fa-chart-bar'],
                ['name' => 'Excel', 'icon' => 'fas fa-file-excel'],
                ['name' => 'SQL', 'icon' => 'fas fa-database'],
                ['name' => 'Power Query', 'icon' => 'fas fa-filter'],
                ['name' => 'DAX', 'icon' => 'fas fa-calculator'],
                ['name' => 'Power BI Service', 'icon' => 'fas fa-cloud']
            ]
        ]);

        // Python
        Course::create([
            'title' => 'Python',
            'description' => 'Complete Python programming bootcamp. From basics to advanced topics including Django, Flask, data science, and machine learning fundamentals.',
            'price' => 129.99,
            'duration_hours' => 80,
            'level' => 'Beginner',
            'status' => 'opened',
            'instructor_id' => 2,
            'objectives' => [
                'Master Python programming fundamentals',
                'Work with data structures and algorithms',
                'Build web applications with Django',
                'Create APIs with Flask',
                'Perform data analysis with Pandas',
                'Visualize data with Matplotlib',
                'Understand OOP concepts',
                'Handle databases with SQLAlchemy',
                'Write clean and efficient code',
                'Deploy Python applications'
            ],
            'curriculum' => [
                'Python Basics',
                'Data Types & Variables',
                'Control Flow',
                'Functions & Modules',
                'Object-Oriented Programming',
                'File Handling',
                'Django Framework',
                'Flask Framework',
                'Data Analysis with Pandas',
                'Data Visualization',
                'Database Integration'
            ],
            'projects' => [
                ['title' => 'Calculator App', 'description' => 'Basic operations', 'icon' => '🧮'],
                ['title' => 'Web Scraper', 'description' => 'Data extraction', 'icon' => '🕷️'],
                ['title' => 'Blog Website', 'description' => 'Django project', 'icon' => '📰'],
                ['title' => 'REST API', 'description' => 'Flask backend', 'icon' => '🔌'],
                ['title' => 'Data Dashboard', 'description' => 'Analytics tool', 'icon' => '📊'],
                ['title' => 'Automation Script', 'description' => 'Task automation', 'icon' => '⚙️']
            ],
            'tools' => [
                ['name' => 'Python', 'icon' => 'fab fa-python'],
                ['name' => 'Django', 'icon' => 'fas fa-server'],
                ['name' => 'Flask', 'icon' => 'fas fa-flask'],
                ['name' => 'Jupyter', 'icon' => 'fas fa-book'],
                ['name' => 'Git', 'icon' => 'fab fa-git-alt'],
                ['name' => 'VS Code', 'icon' => 'fas fa-code']
            ]
        ]);

        // React JS
        Course::create([
            'title' => 'React JS',
            'description' => 'Build powerful web applications with React. Learn hooks, context API, Redux toolkit, and modern React patterns for scalable applications.',
            'price' => 109.99,
            'duration_hours' => 50,
            'level' => 'Intermediate',
            'status' => 'opened',
            'instructor_id' => 1,
            'objectives' => [
                'Master React components and JSX',
                'Use React Hooks effectively',
                'Manage state with Context API',
                'Implement Redux for complex state',
                'Build reusable components',
                'Handle side effects properly',
                'Optimize React performance',
                'Test React applications',
                'Deploy production-ready apps',
                'Follow React best practices'
            ],
            'curriculum' => [
                'React Fundamentals',
                'JSX & Components',
                'Props & State',
                'React Hooks',
                'Context API',
                'Redux Toolkit',
                'React Router',
                'Forms & Validation',
                'API Integration',
                'Testing',
                'Deployment'
            ],
            'projects' => [
                ['title' => 'Task Manager', 'description' => 'CRUD app', 'icon' => '✔️'],
                ['title' => 'Movie Database', 'description' => 'API integration', 'icon' => '🎬'],
                ['title' => 'E-commerce Site', 'description' => 'Full shopping', 'icon' => '🛒'],
                ['title' => 'Social Network', 'description' => 'User interactions', 'icon' => '👥'],
                ['title' => 'Chat Application', 'description' => 'Real-time messaging', 'icon' => '💬'],
                ['title' => 'Dashboard Admin', 'description' => 'Management panel', 'icon' => '📊']
            ],
            'tools' => [
                ['name' => 'React', 'icon' => 'fab fa-react'],
                ['name' => 'Redux', 'icon' => 'fas fa-database'],
                ['name' => 'Webpack', 'icon' => 'fas fa-box'],
                ['name' => 'npm', 'icon' => 'fab fa-npm'],
                ['name' => 'Git', 'icon' => 'fab fa-git-alt'],
                ['name' => 'VS Code', 'icon' => 'fas fa-code']
            ]
        ]);
    }
}