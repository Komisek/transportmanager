<?php
    //pr($train);
    header ("content-type: text/xml");
    header('Content-Disposition: attachment; filename="downloaded.xml"');
?>

    <PathRequest>
        <MessageHeader>
            <MessageStatus/>
            <MessageReference>
                <MessageType/>
                <MessageNumber/>
                <MessageDateTime>
                    <?php echo $train['Train']['modified']; ?>
                </MessageDateTime>
            </MessageReference>
            <Sender/>
            <Recipient/>
        </MessageHeader>
        <PathIdentity>
            <PathIdent/>
            <PathDeparturePoint>
                <CountryCodeUIC/>
                <LocationPrimaryCode>
                <?php echo $train['Route']['start_station_id']; ?>
                </LocationPrimaryCode>
                <LocationSusidiaryCode/>
            </PathDeparturePoint>
            <PathDepartureTime>
            <?php echo $train['Route']['datum_cas_odjezdu']; ?>
            </PathDepartureTime>
            <PathDestinationPoint>
                <CountryCodeUIC/>
                <LocationPrimaryCode>
                <?php echo $train['Route']['end_station_id']; ?>
                </LocationPrimaryCode>
                <LocationSusidiaryCode/>
            </PathDestinationPoint>
            <PathDepartureTime>
            <?php echo $train['Route']['datum_cas_prijezdu']; ?>
            </PathDepartureTime>
            <TrainNumber id="<?php echo $train['Train']['id']; ?>">
                <PathIdent/>
                <ScheduledDepartureDateTime/>
                <PathDepartureLocation>
                    <CountryCodeUIC/>
                    <LocationPrimaryCode/>
                    <LocationSusidiaryCode/>
                </PathDepartureLocation>
            </TrainNumber>
        </PathIdentity>
        <RequestedJourneySelection>
            <JourneySelection>
                <IntermediateDestination>
                    <CountryCodeUIC/>
                    <LocationPrimaryCode/>
                    <LocationSusidiaryCode/>
                </IntermediateDestination>
                <IntermediateArrivalTime/>
                <IntermediateDepartureTime/>
                <ResponsibilityNextSection>
                    <ResponsibleRU/>
                    <ResponsibleIM/>
                </ResponsibilityNextSection>
            </JourneySelection>
            <TrainRunningData>
                <TrainRunningTechData>
                    <TrainWeight/>
                    <TrainLenth/>
                    <Locoldent>
                        <TractionType/>
                        <TractionIdent/>
                        <TractionMode/>
                    </Locoldent>
                    <TrainCC_System/>
                    <TrainRadioSystem/>
                    <TrainMaxSpeed/>
                    <MaxAxleWeight/>
                    <BreakeType/>
                    <BreakeWeight/>
                    <TrainType/>
                </TrainRunningTechData>
                <ExceptionalGauginglnd/>
                <DangerousGoodsIndication>
                    <HazardNumber/>
                    <UN_MaterialNumber/>
                    <RID_Classification/>
                </DangerousGoodsIndication>
                <ActivityType/>
            </TrainRunningData>
        </RequestedJourneySelection>
        <FreeTextField/>
        <PathRequestOltisSection>
            <Calendar_Ident/>
        </PathRequestOltisSection>
    </PathRequest>