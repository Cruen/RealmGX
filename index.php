<?php
// You can add any PHP logic here if needed
$pageTitle = "Stuff";
$links = [
    ["name" => "Better Level Up", "url" => "https://www.curseforge.com/wow/addons/blu-better-level-up", "description" => "BLU - Better Level Up"],
    ["name" => "GitHub", "url" => "https://github.com", "description" => "Code repository"],
    ["name" => "Stack Overflow", "url" => "https://stackoverflow.com", "description" => "Developer community"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 2rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(255,255,255,0.3);
            margin-bottom: 1rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            font-weight: 300;
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .links-section {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .section-title {
            background: #f8f9fa;
            padding: 1.5rem;
            border-bottom: 1px solid #dee2e6;
        }

        .section-title h2 {
            color: #495057;
            font-size: 1.5rem;
            font-weight: 400;
        }

        .links-list {
            padding: 1rem;
        }

        .link-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            margin: 0.5rem 0;
            background: #f8f9fa;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
            color: inherit;
        }

        .link-item:hover {
            background: #e9ecef;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .link-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .link-content {
            flex-grow: 1;
        }

        .link-name {
            font-size: 1.1rem;
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.2rem;
        }

        .link-description {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .link-arrow {
            color: #6c757d;
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .header-image {
                width: 120px;
                height: 120px;
            }
            
            .container {
                margin: 1rem auto;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <img src="https://via.placeholder.com/150/667eea/ffffff?text=LINKS" alt="Header Image" class="header-image">
        <h1><?php echo $pageTitle; ?></h1>
        <p>Relevent links for the astute web surfer</p>
    </header>

    <div class="container">
        <div class="links-section">
            <div class="section-title">
                <h2>Quick Links</h2>
            </div>
            <div class="links-list">
                <?php foreach ($links as $link): ?>
                    <a href="<?php echo htmlspecialchars($link['url']); ?>" target="_blank" class="link-item">
                        <div class="link-icon">
                            <?php echo strtoupper(substr($link['name'], 0, 1)); ?>
                        </div>
                        <div class="link-content">
                            <div class="link-name"><?php echo htmlspecialchars($link['name']); ?></div>
                            <div class="link-description"><?php echo htmlspecialchars($link['description']); ?></div>
                        </div>
                        <div class="link-arrow">→</div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>