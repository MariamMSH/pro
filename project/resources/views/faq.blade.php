@extends('base_layout._layout')
@section('body')

	<!-- FAQ Us start -->
<div class="container py-3">
<div class="mainFAQ container">

	  <h1>Frequently Asked Questions ?</h1>
	  <p>Here we've collected the most popular questions. If you have any other questions, ask <br><span> them in the chat.</span>
	  </p> 

 </div>
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="accordion" id="faqExample">
                <div class="card">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0">
                            <button class=" question btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Q.What is Vote?
                            </button>
                          </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b> Votes is an online voting system based on blockchain technology and backed with transparent crypto algorithms. It consists of a web-based application for creating and holding votes and an app for voting.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingTwo">
                        <h5 class="mb-0">
                        <button class=" question btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Q. What is a blockchain?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                        <div class="card-body">
                             <b>Answer:</b>A blockchain can be thought of as a distributed database. Information held on a blockchain exists as a shared and continually reconciled database. Because of that the blockchain database isn’t stored in a single location, meaning the records it keeps are truly public and easily verifiable. No centralized version of this information exists for a hacker to corrupt. Hosted by millions of computers simultaneously, its data is accessible to anyone on the Internet.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                            <button class=" question btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Q. Is it secure?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                           <b>Answer:</b> Absolutely. Unlike regular servers where stored data can be hacked or manipulated, data in a blockchain is kept in blocks on the computers of all the network participants. So it’s impossible to hack it because to do so you would have to hack all the machines in the network. It’s also impossible to steal it because it’s encrypted.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingFour">
                        <h5 class="mb-0">
                            <button class=" question btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Q. What types of elections can I hold with Voters?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b>The types of elections available include a traditional vote (majority voting) where voters choose a single candidate and a more complex method where a voter can vote for several candidates (cumulative voting). You can find out more about the vote types in the User Guide.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header p-2" id="headingFive">
                        <h5 class="mb-0">
                            <button class=" question btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Q. Are the votes anonymous?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b>Yes. Voter anonymity is assured thanks to the transparent algorithms we use on top of the blockchain.
                        </div>
                    </div>
                </div>

               

                <div class="card">
                    <div class="card-header p-2" id="headingSix">
                        <h5 class="mb-0">
                            <button class=" question btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              Q. What can I do with Votes?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b>Votes lets you hold elections online. You simply create a vote in the Organizer panel on the site and fill in the voting information (names of candidates or other participants along with descriptions). Polys does the rest, such as sending notifications to voters and counting votes.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header p-2" id="headingSeven">
                        <h5 class="mb-0">
                            <button class=" question btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              Q. How do voters vote?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b>There are two ways of casting a vote — by email, using unique codes, and public voting. Below is a little more information about each of them. </br></br>
									<span> <b>UNIQUE CODES </b></span></br>
									Polys generates unique codes. Voters receive these codes in printed or some other format and vote on a public computer or their own devices. This method is suitable for a combination of online and offline voting. It is the ideal solution for political party leadership ballots and electing the governments of cities, regions or countries.
                                     
									</br></br>
									<span> <b>PUBLIC VOTE </b></span></br>
									A public vote has a special link and QR code, and is open to everyone who can view it. This method is suitable for voting at public conferences, meetings, and other public events.
                        </div>
                    </div>
                </div>

                
                <div class="card">
                    <div class="card-header p-2" id="headingNine">
                       <h5 class="mb-0">
                            <button class=" question btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                              Q. I launched a vote and then found a mistake. Can I fix it?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b>When voting is under way, nothing can be changed. This is one of the advantages of blockchain technology, which excludes the manipulation of results after voters have already started voting. If it was a critical mistake, you will have to hold a new vote.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header p-2" id="headingTen">
                        <h5 class="mb-0">
                            <button class=" question btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                              Q. A voter made a mistake. Can I change their vote?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b>Nobody can make changes to the voting process or the results. Polys is based on blockchain and all elections are immutable.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header p-2" id="headingEleven">
                        <h5 class="mb-0">
                            <button class=" question btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                              Q. When will voters be able to see the results?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b>The results appear on screen as soon as voting has ended at a set time. Voters can view the result by clicking on the link they used to vote.
                        </div>
                    </div>
                </div>







            </div>

        </div>
    </div>
    
</div>




	<!--  FAQ Us end-->

@endsection