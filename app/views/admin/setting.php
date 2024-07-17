<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>
<style>
    .site-settings-container {
    max-width: 500px;
    margin: auto;
}
</style>
    <div class="container mt-5">
        <h2>Site Settings</h2>
        
        <!-- General Settings -->
        <div class="card mt-4">
            <div class="card-header">
                General Settings
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="siteTitle">Site Title:</label>
                        <input
                            type="text"
                            class="form-control"
                            id="siteTitle"
                            placeholder="Enter site title"
                        />
                    </div>
                    <div class="form-group">
                        <label for="siteDescription">Site Description:</label>
                        <textarea class="form-control" id="siteDescription" rows="3" placeholder="Enter site description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="siteLogo">Logo:</label>
                        <input type="file" class="form-control-file" id="siteLogo">
                        <small class="form-text text-muted">Current logo: <img src="<?php echo URLROOT; ?>/images/loggo.png" alt="Current Logo" width="50"></small>
                        <button type="button" class="btn btn-danger btn-sm mt-2">Remove Logo</button>
                    </div>
                    <!-- <div class="form-group">
                        <label for="siteFavicon">Favicon:</label>
                        <input type="file" class="form-control-file" id="siteFavicon">
                        <small class="form-text text-muted">Current favicon: <img src="current-favicon.ico" alt="Current Favicon" width="16"></small>
                        <button type="button" class="btn btn-danger btn-sm mt-2">Remove Favicon</button>
                    </div> -->
                    <div class="form-group">
                        <label for="contactEmail">Contact Email:</label>
                        <input type="email" class="form-control" id="contactEmail" placeholder="Enter contact email">
                    </div>
                    <div class="form-group">
                        <label for="footerText">Footer Text:</label>
                        <textarea class="form-control" id="footerText" rows="2" placeholder="Enter footer text"></textarea>
                    </div>
                </form>
            </div>
        </div>

        <!-- SEO Settings -->
        <div class="card mt-4">
            <div class="card-header">
                SEO Settings
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="homepageTitle">Homepage Title:</label>
                        <input type="text" class="form-control" id="homepageTitle" placeholder="Enter homepage meta title">
                    </div>
                    <div class="form-group">
                        <label for="homepageDescription">Homepage Description:</label>
                        <textarea class="form-control" id="homepageDescription" rows="3" placeholder="Enter homepage meta description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="homepageKeywords">Homepage Keywords:</label>
                        <input type="text" class="form-control" id="homepageKeywords" placeholder="Enter homepage meta keywords (comma-separated)">
                    </div>
                    <div class="form-group">
                        <label for="defaultMetaTitle">Default Meta Title:</label>
                        <input type="text" class="form-control" id="defaultMetaTitle" placeholder="Enter default meta title for other pages">
                    </div>
                    <div class="form-group">
                        <label for="defaultMetaDescription">Default Meta Description:</label>
                        <textarea class="form-control" id="defaultMetaDescription" rows="3" placeholder="Enter default meta description for other pages"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="defaultMetaKeywords">Default Meta Keywords:</label>
                        <input type="text" class="form-control" id="defaultMetaKeywords" placeholder="Enter default meta keywords for other pages (comma-separated)">
                    </div>
                </form>
            </div>
        </div>

        <!-- Social Media Integration -->
        <div class="card mt-4">
            <div class="card-header">
                Social Media Integration
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="facebookUrl">Facebook URL:</label>
                        <input type="url" class="form-control" id="facebookUrl" placeholder="Enter Facebook page URL">
                    </div>
                    <div class="form-group">
                        <label for="twitterUrl">Twitter URL:</label>
                        <input type="url" class="form-control" id="twitterUrl" placeholder="Enter Twitter profile URL">
                    </div>
                    <div class="form-group">
                        <label for="instagramUrl">Instagram URL:</label>
                        <input type="url" class="form-control" id="instagramUrl" placeholder="Enter Instagram profile URL">
                    </div>
                    <div class="form-group">
                        <label for="pinterestUrl">Pinterest URL:</label>
                        <input type="url" class="form-control" id="pinterestUrl" placeholder="Enter Pinterest profile URL">
                    </div>
                    <div class="form-group">
                        <label for="youtubeUrl">YouTube URL:</label>
                        <input type="url" class="form-control" id="youtubeUrl" placeholder="Enter YouTube channel URL">
                    </div>
                    <div class="form-group">
                        <label for="linkedinUrl">LinkedIn URL:</label>
                        <input type="url" class="form-control" id="linkedinUrl" placeholder="Enter LinkedIn profile URL">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="socialSharing">
                        <label class="form-check-label" for="socialSharing">Enable Social Sharing Buttons</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- Actions -->
        <div class="mt-4">
            <button type="button" class="btn btn-primary">Save Settings</button>
            <button type="button" class="btn btn-secondary">Reset to Defaults</button>
        </div>
    </div>
