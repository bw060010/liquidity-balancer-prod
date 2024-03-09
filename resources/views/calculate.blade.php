@extends('layouts.app')

@section('content')
    <section class="form-container">
        <h2>Input</h2>
        <form action="/#ad-placeholder" method="POST" class="form">
            @csrf
            <div class="section">
                <div class="input-group">
                    <label for="coinA_initial" class="input-label">Coin A Reference Amount</label>
                    <div class="tooltip-container">
                        <span class="tooltip-icon" tabindex="0" aria-label="More info">
                            <!-- If using an SVG icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24"
                                width="24">
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                                    fill="#0D0D0D"></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M12 10C12.5523 10 13 10.4477 13 11V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V11C11 10.4477 11.4477 10 12 10Z"
                                    fill="#0D0D0D"></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M13.5 7.5C13.5 8.32843 12.8284 9 12 9C11.1716 9 10.5 8.32843 10.5 7.5C10.5 6.67157 11.1716 6 12 6C12.8284 6 13.5 6.67157 13.5 7.5Z"
                                    fill="#0D0D0D"></path>
                            </svg>
                            <span class="tooltip-text" role="tooltip">Fixed at 1 for Coin A to standardize
                                comparison against Coin B</span>
                        </span>
                    </div>
                    <input type="text" name="coinA_initial" id="coinA_initial" pattern="\d+(\.\d+)?" class="input-field"
                        value="1" required readonly>
                </div>
            </div>
            <div class="section">
                <div class="input-group">
                    <label for="coinB_initial" class="input-label">Coin B Equivalent Amount</label>
                    <div class="tooltip-container">
                        <span class="tooltip-icon" tabindex="0" aria-label="More info">
                            <!-- If using an SVG icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24"
                                width="24">
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                                    fill="#0D0D0D"></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M12 10C12.5523 10 13 10.4477 13 11V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V11C11 10.4477 11.4477 10 12 10Z"
                                    fill="#0D0D0D"></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M13.5 7.5C13.5 8.32843 12.8284 9 12 9C11.1716 9 10.5 8.32843 10.5 7.5C10.5 6.67157 11.1716 6 12 6C12.8284 6 13.5 6.67157 13.5 7.5Z"
                                    fill="#0D0D0D"></path>
                            </svg>
                            <span class="tooltip-text" role="tooltip">Enter the value of Coin B equivalent to 1 unit
                                of Coin A according to the latest DEX rates
                                <img src="{{ asset('images/tooltips/example_coin_b_equivalent_amount.png') }}"
                                    alt="Example Coin B Equivalent Amount"></span>

                        </span>
                    </div>
                    <input type="text" name="coinB_initial" id="coinB_initial" pattern="\d+(\.\d+)?" class="input-field"
                        value="{{ $input['coinB_initial'] ?? '' }}" required>
                </div>
            </div>
            <div class="section">
                <div class="input-group">
                    <label for="coinA_price" class="input-label">Price of Coin A</label>
                    <div class="tooltip-container">
                        <span class="tooltip-icon" tabindex="0" aria-label="More info">
                            <!-- If using an SVG icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24"
                                width="24">
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                                    fill="#0D0D0D"></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M12 10C12.5523 10 13 10.4477 13 11V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V11C11 10.4477 11.4477 10 12 10Z"
                                    fill="#0D0D0D"></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M13.5 7.5C13.5 8.32843 12.8284 9 12 9C11.1716 9 10.5 8.32843 10.5 7.5C10.5 6.67157 11.1716 6 12 6C12.8284 6 13.5 6.67157 13.5 7.5Z"
                                    fill="#0D0D0D"></path>
                            </svg>
                            <span class="tooltip-text" role="tooltip">Enter the latest market price of Coin A
                                (find on CoinGecko or similar)</span>
                        </span>
                    </div>
                    <input type="text" name="coinA_price" id="coinA_price" pattern="\d+(\.\d+)?" class="input-field"
                        value="{{ $input['coinA_price'] ?? '' }}" required>
                </div>
            </div>
            <div class="section">
                <div class="input-group">
                    <label for="coinB_price" class="input-label">Price of Coin B</label>
                    <div class="tooltip-container">
                        <span class="tooltip-icon" tabindex="0" aria-label="More info">
                            <!-- If using an SVG icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24"
                                width="24">
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                                    fill="#0D0D0D"></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M12 10C12.5523 10 13 10.4477 13 11V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V11C11 10.4477 11.4477 10 12 10Z"
                                    fill="#0D0D0D"></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M13.5 7.5C13.5 8.32843 12.8284 9 12 9C11.1716 9 10.5 8.32843 10.5 7.5C10.5 6.67157 11.1716 6 12 6C12.8284 6 13.5 6.67157 13.5 7.5Z"
                                    fill="#0D0D0D"></path>
                            </svg>
                            <span class="tooltip-text" role="tooltip">Enter the latest market price of Coin B
                                (find on CoinGecko or similar).
                                A.</span>
                        </span>
                    </div>
                    <input type="text" name="coinB_price" id="coinB_price" pattern="\d+(\.\d+)?" class="input-field"
                        value="{{ $input['coinB_price'] ?? '' }}" required>
                </div>
            </div>
            <div class="section">
                <div class="input-group">
                    <label for="coinA_adjusted" class="input-label">Your Coin A Holdings</label>
                    <div class="tooltip-container">
                        <span class="tooltip-icon" tabindex="0" aria-label="More info">
                            <!-- If using an SVG icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24"
                                width="24">
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                                    fill="#0D0D0D"></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M12 10C12.5523 10 13 10.4477 13 11V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V11C11 10.4477 11.4477 10 12 10Z"
                                    fill="#0D0D0D"></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M13.5 7.5C13.5 8.32843 12.8284 9 12 9C11.1716 9 10.5 8.32843 10.5 7.5C10.5 6.67157 11.1716 6 12 6C12.8284 6 13.5 6.67157 13.5 7.5Z"
                                    fill="#0D0D0D"></path>
                            </svg>
                            <span class="tooltip-text" role="tooltip">Indicate the total amount of Coin A you
                                currently possess for liquidity calculations (can be zero).</span>
                        </span>
                    </div>
                    <input type="text" name="coinA_adjusted" id="coinA_adjusted" pattern="\d+(\.\d+)?"
                        class="input-field" value="{{ $input['coinA_adjusted'] ?? '' }}" required>
                </div>
            </div>
            <div class="section">
                <div class="input-group">
                    <label for="coinB_adjusted" class="input-label">Your Coin B Holdings</label>
                    <div class="tooltip-container">
                        <span class="tooltip-icon" tabindex="0" aria-label="More info">
                            <!-- If using an SVG icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24"
                                width="24">
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                                    fill="#0D0D0D"></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M12 10C12.5523 10 13 10.4477 13 11V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V11C11 10.4477 11.4477 10 12 10Z"
                                    fill="#0D0D0D"></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M13.5 7.5C13.5 8.32843 12.8284 9 12 9C11.1716 9 10.5 8.32843 10.5 7.5C10.5 6.67157 11.1716 6 12 6C12.8284 6 13.5 6.67157 13.5 7.5Z"
                                    fill="#0D0D0D"></path>
                            </svg>
                            <span class="tooltip-text" role="tooltip">Indicate the total amount of Coin B you
                                currently possess for liquidity calculations (can be zero).</span>
                        </span>
                    </div>
                    <input type="text" name="coinB_adjusted" id="coinB_adjusted" pattern="\d+(\.\d+)?"
                        class="input-field" value="{{ $input['coinB_adjusted'] ?? '' }}" required>
                </div>
            </div>
            <div class="section">
                <button type="submit">Calculate</button>
            </div>
        </form>
    </section>
    @if (isset($submitted))
        <section class="ad-placeholder" id="ad-placeholder">
        @else
            <section class="ad-placeholder">
    @endif
    <!-- Ad content will be dynamically inserted here by Google Ads or other ad services -->
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </section>
    @if (isset($unitsOfCoinsResult))
        <section class="results-container">
            <h2>Output</h2>
            <p class="fun-text">{{ $text }}</p>
            {!! $text_swap !!}
            <div id="results" class="results">
                <p><strong>Breakdown of the calculation:</strong><br>
                    Amount of coin A to {{ $unitsOfCoinsResult['A']['text'] }}:
                    <em>{{ $unitsOfCoinsResult['A']['amount'] }}</em><br>
                    Amount of coin B to {{ $unitsOfCoinsResult['B']['text'] }}:
                    <em>{{ $unitsOfCoinsResult['B']['amount'] }}</em><br>
                    Final coin A amount: <em>{{ $finalCoinA }}</em><br>
                    Final coin B amount: <em>{{ $finalCoinB }}</em>
                </p>
            </div>
        </section>
    @endif
@endsection
