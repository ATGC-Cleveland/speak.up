<?php
    $campaigns = [
        1 => 'Martin Luther King Jr. Day (January 16, 2017)',
        2 => 'International Condom Day (February 13, 2017)',
        3 => 'National HIV Testing Day (June 27, 2017)',
        4 => 'World AIDS Day (December 1, 2017)',
        5 => 'Local Events (Various Dates)'
    ];
    $regions = [
        1 => 'Midwest',
        2 => 'South',
        3 => 'Northeast',
        4 => 'Mid-Atlantic',
        5 => 'West',
        6 => 'International',
    ];
?>

<div class="ui stackable grid" style="margin-top: 0 !important;">
    <div class="six wide column">

        <header class="ui inverted large top attached header tk-open-sans">Event Snapshot</header>

        <div class="ui bottom attached segment">
            <table class="ui very basic two column padded table">
                <caption>Event Snapshot Details</caption>
                <tbody>
                    <tr>
                        <th>Event Date</th>
                        <td class="right aligned"><?= $event->date; ?></td>
                    </tr>
                    <tr>
                        <th>Region</th>
                        <td class="right aligned"><?= $regions[ $event->region_id ] ?></td>
                    </tr>
                    <tr>
                        <th>Location</th>
                        <td class="right aligned"><?= $event->city . ', ' . $event->state ?></td>
                    </tr>
                    <tr>
                        <th>Venue</th>
                        <td class="right aligned"><?= $event->venue; ?></td>
                    </tr>
                    <tr>
                        <th>Total Participants</th>
                        <td class="right aligned"><?= $event->total_participants; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="ui one column right aligned grid">
            <div class="column">

                <?= $this->Html->link(
                            '<i class="arrow left icon"></i>Back to Events',
                            [ 'controller' => 'Events' , 'action' => 'index' ],
                            [ 'escape' => false ]
                        );
                ?>

            </div>
        </div>
    </div>

    <div class="ten wide column">

        <header class="ui inverted huge top attached header"><?= $event->title; ?></header>

        <div class="ui attached segment">
            <div class="ui large top attached label" style="background-color: rgb(241,233,219);"><?= $campaigns[ $event->campaign_id ] ?></div>

            <p style="margin-top: 3rem !important; margin-bottom: 1rem !important;"><strong>Event Synopsis:</strong> <?= $event->description; ?></p>

        </div>

        <!--<div class="ui attached segment">
            <div class="ui large top attached label">Highlights &amp; Testimonials</div>
            <ul style="margin-top: 3rem !important;">
                <li>First time the Mayor had attended a community event.</li>
                <li>Dramatic increase in participation from the previous month's event</li>
            </ul>
        </div>

        <div class="ui attached segment">
            <div class="ui large top attached label">Statistics</div>
            <div class="ct-chart ct-double-octave" style="margin-top: 3rem !important;"></div>
        </div>-->

        <div class="ui bottom attached segment">
            <div class="ui large top attached label">Media</div>

            <table class="ui striped fixed single line table" style="table-collapse: collapse; margin-top: 2.5rem !important;">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="two wide">Type</th>
                        <th>Uploaded</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach( $event->media as $media ): ?>
                    <tr>
                        <td><?= $this->Html->link( $media->title , 'media/' .  $media->urn , [ 'target' => '_blank' ] ) ?></td>
                        <td>JPEG</td>
                        <td><?= $event->created->i18nFormat( 'MM/dd/YYYY h:mma' ); ?></td>
                        <td>Submitted</td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
