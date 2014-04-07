<script type="text/javascript">
    jQuery(function(){
        mixpanel.track_links(".download-button", "Downloaded Plugin", {
            "pageview_url": document.URL,
        });
        mixpanel.track("Page viewed",{
            "pageview_url": document.URL,
        });
    });
</script>