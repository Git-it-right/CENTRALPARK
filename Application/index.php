<?php  
        
echo ' 
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>PHP Application</title>
	<link href="css/site.css" rel="stylesheet">
</head>

<body>
<!-- Nav tabs -->
        <ul class="nav nav-tabs" id="s">
            <li class="nav-item">
                <a href="#tab1Id" class="nav-link active">Active</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#tab2Id">Action</a>
                    <a class="dropdown-item" href="#tab3Id">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#tab4Id">Action</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#tab5Id" class="nav-link">Another link</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
        </div>
        
        <script>
            $('#s a').click(e => {
                e.preventDefault();
                $(this).tab('show');
            });
        </script>
<div class="main-container">
        <div class="cloud-image">
            <img src="img/successCloudNew.svg" alt="successCloudNew" />
        </div>
        <div class="content">
            <div class="tweet-container">
            <a href="http://twitter.com/intent/tweet/?text=I%20just%20created%20a%20new%20PHP%20website%20on%20Azure%20using%20Github%20Actions&hashtags=%40GithubActions%20%40Azure">
                <img src="img/tweetThis.svg" alt="tweetThis" />
            </a>
        </div>
            <div class="content-body">
                <div class="success-text">CentralPark</div>
                <div class="description line-1">
			
				"Your Github Repository: CENTRALPARK with Github Actions has been successfully setup"
				
				</div>
                <div class="description line-2">
				<?php
				$appType = "PHP";
				echo "Your $appType app is up and running on Azure";
				?>
				</div>
                <div class="next-steps-container">
                    <div class="next-steps-header">Next up</div>
                    <div class="next-steps-body">
                        <div class="step">
                            <div class="step-icon">
                                <img src="img/cloneWhite.svg" alt="cloneWhite" >
                            </div>
                            <div class="step-text"><a href="https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/cloning-a-repository">Clone your code repository and start developing your application on IDE of your choice</a></div>
                        </div>
                        <div class="step">
                            <div class="step-icon">
                                <img src="img/deployWhite.svg" alt="deployWhite">
                            </div>
                            <div class="step-text"><a href="https://docs.github.com/en/actions">View your CI/CD pipeline on Github and customize it as per your needs</a></div>
                        </div>
                        <div class="step">
                            <div class="step-icon">
                                <img src="img/stackWhite.svg" alt="stackWhite">
                            </div>
                            <div class="step-text"><a href="http://portal.azure.com">View your service stack in the Azure Portal</a></div>
                        </div>
                        <div class="step">
                            <div class="step-icon">
                                <img src="img/lightbulbWhite.svg" alt="lightbulbWhite">
                            </div>
                            <div class="step-text"><a href="https://docs.github.com">Learn more about all you can do with Github by visiting the documentation</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>';
?>
