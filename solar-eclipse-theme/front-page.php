<?php
/**
 * The front page template file
 *
 * @package SolarEclipse
 */

get_header(); ?>

<main id="primary" class="site-main">

	<!-- 1. HERO SECTION -->
	<section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden bg-solar-gradient">
		<!-- Animated Background Elements -->
		<div class="absolute inset-0 z-0">
			<div class="absolute top-1/4 left-1/4 w-96 h-96 bg-solar-yellow/20 rounded-full blur-[120px] mix-blend-screen animate-float"></div>
			<div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-solar-cyan/20 rounded-full blur-[120px] mix-blend-screen animate-float" style="animation-delay: -3s;"></div>
			<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full max-w-4xl bg-eclipse-glow opacity-50"></div>
			<!-- Subtle Light Rays -->
			<div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJsaW5lcyIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNMCA0MEg0MFYwTTQwIDEwTDMwIDIwTTIwIDMwTDEwIDQwIiBzdHJva2U9InJnYmEoMjU1LDI1NSwyNTUsMC4wMykiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNsaW5lcykiLz48L3N2Zz4=')] opacity-30"></div>
		</div>

		<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center pt-20">
			<span class="inline-block py-1 px-3 rounded-full bg-white/10 border border-white/20 text-solar-cyan text-sm font-semibold tracking-wide mb-6 reveal-on-scroll">THE FUTURE OF ENERGY IS HERE</span>
			<h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-6 leading-tight tracking-tighter reveal-on-scroll" style="animation-delay: 100ms;">
				Power Your <span class="gradient-text">Future.</span>
			</h1>
			<p class="mt-4 text-xl md:text-2xl text-solar-light/80 max-w-3xl mx-auto mb-10 font-medium reveal-on-scroll" style="animation-delay: 200ms;">
				Premium solar solutions for homes, businesses, and large-scale energy independence.
			</p>
			
			<div class="flex flex-col sm:flex-row justify-center gap-4 reveal-on-scroll" style="animation-delay: 300ms;">
				<a href="#quote" class="btn-primary text-lg px-8 py-4">Get My Solar Quote</a>
				<a href="#solutions" class="btn-secondary text-lg px-8 py-4">Explore Solutions</a>
			</div>
		</div>
	</section>

	<!-- 2. TRUST & SOCIAL PROOF -->
	<section class="py-12 border-y border-white/5 bg-solar-black/50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center reveal-on-scroll">
				<div>
					<div class="text-4xl font-bold text-solar-yellow mb-2">10k+</div>
					<div class="text-sm font-medium text-solar-gray uppercase tracking-wider">Installations</div>
				</div>
				<div>
					<div class="text-4xl font-bold text-solar-cyan mb-2">25 Yrs</div>
					<div class="text-sm font-medium text-solar-gray uppercase tracking-wider">Warranty</div>
				</div>
				<div>
					<div class="text-4xl font-bold text-solar-green mb-2">$50M+</div>
					<div class="text-sm font-medium text-solar-gray uppercase tracking-wider">Energy Saved</div>
				</div>
				<div>
					<div class="text-4xl font-bold text-white mb-2">15 Yrs</div>
					<div class="text-sm font-medium text-solar-gray uppercase tracking-wider">Experience</div>
				</div>
			</div>
			
			<!-- Partner Logos Dummy -->
			<div class="mt-12 flex flex-wrap justify-center gap-8 md:gap-16 opacity-50 grayscale hover:grayscale-0 transition-all duration-500 reveal-on-scroll">
				<?php for ($i = 1; $i <= 5; $i++): ?>
				<div class="text-xl font-heading font-bold text-white tracking-widest flex items-center gap-2">
					<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 22h20L12 2z"/></svg> BRAND <?php echo $i; ?>
				</div>
				<?php
endfor; ?>
			</div>
		</div>
	</section>

	<!-- 3. SOLUTIONS -->
	<section id="solutions" class="py-24 relative">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center max-w-3xl mx-auto mb-16 reveal-on-scroll">
				<h2 class="text-4xl md:text-5xl font-bold mb-6">Comprehensive Energy <span class="text-solar-yellow">Solutions</span></h2>
				<p class="text-lg text-solar-light/70">From residential rooftops to commercial microgrids, we provide cutting-edge renewable technology tailored to your needs.</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
				<?php
$solutions = [
    ['Residential Solar', 'Power your home and reduce dependency on the grid with high-efficiency panels.', 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
    ['Commercial Solar', 'Maximize ROI and meet sustainability goals with large-scale solar arrays.', 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
    ['Battery Storage', 'Store excess energy for nighttime use or during power outages with advanced batteries.', 'M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4'],
    ['EV Charging', 'Integrated home and commercial electric vehicle charging stations.', 'M13 10V3L4 14h7v7l9-11h-7z'],
    ['Off-Grid Systems', 'Complete energy independence with deep cycle storage and intelligent management.', 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
    ['Solar Roof', 'Aesthetic and powerful solar shingles that replace traditional roofing completely.', 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4']
];
foreach ($solutions as $i => $solution): ?>
				<div class="glass-panel p-8 group hover:-translate-y-2 hover:shadow-[0_10px_30px_rgba(6,182,212,0.15)] transition-all duration-300 reveal-on-scroll" style="animation-delay: <?php echo $i * 100; ?>ms">
					<div class="w-14 h-14 rounded-xl bg-solar-gray/30 flex items-center justify-center mb-6 text-solar-cyan group-hover:text-solar-yellow group-hover:scale-110 group-hover:bg-solar-yellow/10 transition-all duration-300">
						<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?php echo $solution[2]; ?>"></path></svg>
					</div>
					<h3 class="text-xl font-bold mb-3"><?php echo $solution[0]; ?></h3>
					<p class="text-sm text-solar-light/60 leading-relaxed mb-6"><?php echo $solution[1]; ?></p>
					<a href="#" class="inline-flex items-center text-sm font-semibold text-solar-cyan hover:text-solar-yellow transition-colors group">
						Learn more 
						<svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
					</a>
				</div>
				<?php
endforeach; ?>
			</div>
		</div>
	</section>

	<!-- 4. HOW IT WORKS -->
	<section id="process" class="py-24 bg-solar-black border-y border-white/5 relative overflow-hidden">
		<!-- Background decorative line -->
		<div class="absolute top-1/2 left-0 w-full h-px bg-gradient-to-r from-transparent via-solar-cyan/30 to-transparent hidden lg:block -translate-y-1/2"></div>
		
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
			<div class="text-center max-w-3xl mx-auto mb-20 reveal-on-scroll">
				<h2 class="text-4xl md:text-5xl font-bold mb-6">Seamless <span class="text-solar-cyan">Process</span></h2>
				<p class="text-lg text-solar-light/70">Getting solar has never been easier. We handle everything from permits to final inspection.</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
				<?php
$steps = [
    ['Consultation', 'Free site analysis and custom energy savings estimate.', '1'],
    ['Custom Design', 'Engineering team designs a system optimized for your roof.', '2'],
    ['Installation', 'Professional, clean, and fast installation by certified experts.', '3'],
    ['Activation', 'System is turned on and you start saving money immediately.', '4']
];
foreach ($steps as $i => $step): ?>
				<div class="relative text-center reveal-on-scroll" style="animation-delay: <?php echo $i * 150; ?>ms">
					<div class="w-20 h-20 mx-auto bg-solar-charcoal border-2 border-solar-cyan rounded-full flex items-center justify-center text-2xl font-bold text-white shadow-[0_0_20px_rgba(6,182,212,0.3)] mb-6 relative z-10 hover:scale-110 hover:border-solar-yellow transition-all duration-300">
						<?php echo $step[2]; ?>
					</div>
					<h3 class="text-xl font-bold mb-3 text-white"><?php echo $step[0]; ?></h3>
					<p class="text-sm text-solar-light/60 px-4"><?php echo $step[1]; ?></p>
				</div>
				<?php
endforeach; ?>
			</div>
		</div>
	</section>

	<!-- 5. PROJECTS / CASE STUDIES -->
	<section id="projects" class="py-24">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex flex-col md:flex-row justify-between items-end mb-12 reveal-on-scroll">
				<div class="max-w-2xl">
					<h2 class="text-4xl md:text-5xl font-bold mb-6">Featured <span class="text-solar-green">Installations</span></h2>
					<p class="text-lg text-solar-light/70">Real homes and businesses saving thousands on energy.</p>
				</div>
				<a href="#" class="btn-secondary hidden md:inline-flex mt-6 md:mt-0">View All Projects</a>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
				<?php
$projects = [
    ['Modern Eco Home', '12kW System • $3,500/yr Saved', 'https://images.unsplash.com/photo-1508514177221-188b1c77eca2?auto=format&fit=crop&q=80&w=800&h=600'],
    ['Tech Campus', '250kW Array • 100% Offset', 'https://images.unsplash.com/photo-1497440001374-f26997328c1b?auto=format&fit=crop&q=80&w=800&h=600'],
    ['Suburban Residence', '8kW with Battery • Off-Grid Ready', 'https://images.unsplash.com/photo-1613665813446-82a78c468a1d?auto=format&fit=crop&q=80&w=800&h=600']
];
foreach ($projects as $i => $project): ?>
				<div class="group relative rounded-2xl overflow-hidden h-80 reveal-on-scroll" style="animation-delay: <?php echo $i * 100; ?>ms">
					<img src="<?php echo $project[2]; ?>" alt="<?php echo $project[0]; ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
					<div class="absolute inset-0 bg-gradient-to-t from-solar-black via-solar-black/50 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
					<div class="absolute inset-x-0 bottom-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
						<h3 class="text-xl font-bold text-white mb-2"><?php echo $project[0]; ?></h3>
						<p class="text-sm font-semibold text-solar-green"><?php echo $project[1]; ?></p>
						<div class="mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
							<a href="#" class="inline-block border border-white/30 rounded-full px-4 py-1 text-xs text-white hover:bg-white hover:text-solar-black transition-colors">View Case Study</a>
						</div>
					</div>
				</div>
				<?php
endforeach; ?>
			</div>
			<div class="text-center mt-10 md:hidden reveal-on-scroll">
				<a href="#" class="btn-secondary w-full">View All Projects</a>
			</div>
		</div>
	</section>

	<!-- 6. CALCULATOR (Mock UI) -->
	<section class="py-24 bg-gradient-to-b from-solar-charcoal to-solar-black">
		<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="glass-panel p-8 md:p-12 relative overflow-hidden reveal-on-scroll border-solar-yellow/20">
				<!-- Decorative -->
				<div class="absolute -top-24 -right-24 w-64 h-64 bg-solar-yellow/20 rounded-full blur-[80px]"></div>

				<div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
					<div>
						<h2 class="text-3xl md:text-4xl font-bold mb-4">Calculate Your <span class="text-solar-yellow">Savings</span></h2>
						<p class="text-solar-light/70 mb-8">Estimate how much you could save over 25 years by switching to solar today.</p>
						
						<form class="space-y-6" onsubmit="event.preventDefault(); document.getElementById('calc-result').classList.remove('hidden');">
							<div>
								<label class="block text-sm font-medium text-solar-gray mb-2">Average Monthly Bill</label>
								<div class="relative">
									<span class="absolute left-4 top-1/2 -translate-y-1/2 text-white font-medium">$</span>
									<input type="number" value="150" class="w-full bg-white/5 border border-white/10 rounded-xl pl-8 pr-4 py-3 text-white focus:outline-none focus:border-solar-yellow focus:ring-1 focus:ring-solar-yellow transition-colors">
								</div>
							</div>
							<div>
								<label class="block text-sm font-medium text-solar-gray mb-2">Property Region</label>
								<select class="w-full bg-[#1A202C] border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-solar-yellow focus:ring-1 focus:ring-solar-yellow transition-colors appearance-none">
									<option>California</option>
									<option>Texas</option>
									<option>Florida</option>
									<option>New York</option>
									<option>Other</option>
								</select>
							</div>
							<button type="submit" class="w-full btn-primary !shadow-none">Calculate Savings</button>
						</form>
					</div>
					
					<div id="calc-result" class="hidden text-center bg-solar-charcoal/50 border border-white/5 rounded-2xl p-8 transition-all duration-500 animate-pulse">
						<div class="text-sm font-medium text-solar-gray uppercase tracking-wider mb-2">Estimated 25-Year Savings</div>
						<div class="text-5xl font-black text-solar-green mb-6">$42,500</div>
						<div class="space-y-3 pt-6 border-t border-white/10 text-left">
							<div class="flex justify-between text-sm">
								<span class="text-solar-gray">System Size:</span>
								<span class="text-white font-medium">6.5 kW</span>
							</div>
							<div class="flex justify-between text-sm">
								<span class="text-solar-gray">Payback Period:</span>
								<span class="text-white font-medium">6.2 Years</span>
							</div>
							<div class="flex justify-between text-sm">
								<span class="text-solar-gray">CO2 Offset:</span>
								<span class="text-white font-medium">120 Tons</span>
							</div>
						</div>
						<a href="#quote" class="inline-block mt-8 text-sm font-bold text-solar-yellow hover:text-white transition-colors underline underline-offset-4">Get an Exact Quote</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 7. BENEFITS -->
	<section class="py-24 relative">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center max-w-3xl mx-auto mb-16 reveal-on-scroll">
				<h2 class="text-4xl font-bold mb-6">Why Switch to <span class="gradient-text">Solar Eclipse?</span></h2>
			</div>

			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-12">
				<?php
$benefits = [
    ['Lower Bills', 'Drastically reduce or eliminate your monthly electricity costs instantly.', 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
    ['Property Value', 'Increase your home\'s resale value with an owned solar system.', 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
    ['Independence', 'Protect yourself from unpredictable utility rate hikes and grid outages.', 'M13 10V3L4 14h7v7l9-11h-7z'],
    ['Tax Incentives', 'Take advantage of federal and state tax credits to offset installation costs.', 'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z']
];
foreach ($benefits as $i => $benefit): ?>
				<div class="flex flex-col items-center text-center reveal-on-scroll" style="animation-delay: <?php echo $i * 100; ?>ms">
					<div class="w-16 h-16 rounded-full bg-white/5 border border-white/10 flex items-center justify-center mb-6 text-solar-yellow">
						<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?php echo $benefit[2]; ?>"></path></svg>
					</div>
					<h4 class="text-xl font-bold mb-3"><?php echo $benefit[0]; ?></h4>
					<p class="text-sm text-solar-light/70"><?php echo $benefit[1]; ?></p>
				</div>
				<?php
endforeach; ?>
			</div>
		</div>
	</section>

	<!-- 8. FINANCING OPTIONS & 9. TESTIMONIALS (Combined Layout) -->
	<section class="py-24 bg-solar-black border-y border-white/5">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			
			<div class="mb-24">
				<div class="text-center max-w-3xl mx-auto mb-16 reveal-on-scroll">
					<h2 class="text-4xl font-bold mb-6">Flexible <span class="text-solar-green">Financing</span></h2>
					<p class="text-lg text-solar-light/70">Own your power with $0 down payment options.</p>
				</div>
				<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
					<!-- Cash -->
					<div class="glass-panel p-8 text-center reveal-on-scroll">
						<h3 class="text-2xl font-bold mb-2">Cash Purchase</h3>
						<div class="text-solar-cyan font-semibold text-lg mb-6">Max ROI</div>
						<ul class="text-sm text-solar-light/70 space-y-3 mb-8 text-left inline-block">
							<li>✓ Own the system day one</li>
							<li>✓ Claim all tax incentives</li>
							<li>✓ Highest long-term savings</li>
						</ul>
					</div>
					<!-- Loan -->
					<div class="glass-panel p-8 text-center border-solar-yellow/30 relative reveal-on-scroll shadow-[0_0_30px_rgba(251,191,36,0.1)] scale-105 z-10">
						<div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-solar-yellow text-solar-black text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Most Popular</div>
						<h3 class="text-2xl font-bold mb-2">Solar Loan</h3>
						<div class="text-solar-yellow font-semibold text-lg mb-6">$0 Down</div>
						<ul class="text-sm text-solar-light/70 space-y-3 mb-8 text-left inline-block">
							<li>✓ Lower monthly bills instantly</li>
							<li>✓ Fixed, predictable payments</li>
							<li>✓ Claim all tax incentives</li>
						</ul>
					</div>
					<!-- Lease -->
					<div class="glass-panel p-8 text-center reveal-on-scroll">
						<h3 class="text-2xl font-bold mb-2">Solar Lease</h3>
						<div class="text-solar-green font-semibold text-lg mb-6">Worry-Free</div>
						<ul class="text-sm text-solar-light/70 space-y-3 mb-8 text-left inline-block">
							<li>✓ We own and maintain it</li>
							<li>✓ Performance guarantee</li>
							<li>✓ Easy transfer if you sell</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Testimonials -->
			<div class="max-w-5xl mx-auto reveal-on-scroll">
				<h2 class="text-3xl font-bold mb-10 text-center">What Our <span class="text-solar-cyan">Customers</span> Say</h2>
				<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
					<div class="glass-panel p-8 relative">
						<svg class="absolute top-6 left-6 w-10 h-10 text-white/5" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
						<p class="text-solar-light mb-6 relative z-10 font-medium italic">"The installation was incredibly fast, and the design looks sleek. Our first electric bill was negative $15! Highly recommend Solar Eclipse to anyone in California."</p>
						<div class="flex items-center gap-4">
							<div class="w-12 h-12 rounded-full bg-solar-gray overflow-hidden">
								<img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=150&h=150" alt="Sarah J." class="w-full h-full object-cover">
							</div>
							<div>
								<div class="font-bold text-white">Michael T.</div>
								<div class="text-xs text-solar-gray">San Diego, CA</div>
							</div>
						</div>
					</div>
					<div class="glass-panel p-8 relative">
						<svg class="absolute top-6 left-6 w-10 h-10 text-white/5" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
						<p class="text-solar-light mb-6 relative z-10 font-medium italic">"As a business owner, reducing overhead is critical. The commercial array Solar Eclipse built for our warehouse pays for itself and adds massive value."</p>
						<div class="flex items-center gap-4">
							<div class="w-12 h-12 rounded-full bg-solar-gray overflow-hidden">
								<img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=150&h=150" alt="Sarah J." class="w-full h-full object-cover">
							</div>
							<div>
								<div class="font-bold text-white">Sarah Jenkins</div>
								<div class="text-xs text-solar-gray">Austin, TX</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 10. LEAD FORM & 11. FAQ -->
	<section id="quote" class="py-24 relative overflow-hidden">
		<!-- Background Glow -->
		<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-5xl h-96 bg-solar-yellow/5 rounded-full blur-[150px] pointer-events-none"></div>

		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
				
				<!-- Lead Form -->
				<div class="reveal-on-scroll">
					<h2 class="text-4xl font-bold mb-4">Start Your <span class="gradient-text">Journey.</span></h2>
					<p class="text-solar-light/70 mb-8">Fill out the form below to receive a custom design and detailed savings estimate within 24 hours.</p>
					
					<form class="glass-panel p-8 space-y-6" action="#" method="POST" id="lead-form" onsubmit="event.preventDefault(); this.innerHTML = '<div class=\'text-center py-10\'><h3 class=\'text-2xl font-bold text-solar-green mb-2\'>Quote Requested!</h3><p class=\'text-solar-light\'>Our energy consultants will reach out to you shortly.</p></div>';">
						<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
							<div>
								<label class="block text-sm font-medium text-white mb-2">First Name</label>
								<input type="text" required class="w-full bg-solar-charcoal/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-solar-cyan focus:ring-1 focus:ring-solar-cyan transition-colors">
							</div>
							<div>
								<label class="block text-sm font-medium text-white mb-2">Last Name</label>
								<input type="text" required class="w-full bg-solar-charcoal/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-solar-cyan focus:ring-1 focus:ring-solar-cyan transition-colors">
							</div>
						</div>
						<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
							<div>
								<label class="block text-sm font-medium text-white mb-2">Email Address</label>
								<input type="email" required class="w-full bg-solar-charcoal/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-solar-cyan focus:ring-1 focus:ring-solar-cyan transition-colors">
							</div>
							<div>
								<label class="block text-sm font-medium text-white mb-2">Phone Number</label>
								<input type="tel" required class="w-full bg-solar-charcoal/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-solar-cyan focus:ring-1 focus:ring-solar-cyan transition-colors">
							</div>
						</div>
						<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
							<div>
								<label class="block text-sm font-medium text-white mb-2">Property Type</label>
								<select class="w-full bg-solar-charcoal/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-solar-cyan focus:ring-1 focus:ring-solar-cyan transition-colors appearance-none">
									<option>Residential</option>
									<option>Commercial</option>
								</select>
							</div>
							<div>
								<label class="block text-sm font-medium text-white mb-2">Zip Code</label>
								<input type="text" required class="w-full bg-solar-charcoal/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-solar-cyan focus:ring-1 focus:ring-solar-cyan transition-colors">
							</div>
						</div>
						<button type="submit" class="w-full btn-primary text-lg mt-4">Get My Free Quote</button>
						<p class="text-xs text-center text-solar-gray mt-4">By submitting this form, you agree to our Terms of Service and Privacy Policy.</p>
					</form>
				</div>

				<!-- FAQ -->
				<div class="reveal-on-scroll" style="animation-delay: 200ms;">
					<h2 class="text-3xl font-bold mb-8">Frequently Asked <span class="text-solar-cyan">Questions</span></h2>
					
					<div class="space-y-4">
						<?php
$faqs = [
    ['Do solar panels work when it\'s cloudy or raining?', 'Yes. While solar panels are most efficient in direct sunlight, they still generate electricity on cloudy or rainy days by capturing diffused sunlight.'],
    ['What happens if my roof needs repairs?', 'If your roof needs replacing soon, we recommend doing it before installing solar. If a repair is needed later, our team can carefully uninstall and reinstall the panels.'],
    ['How does the tax credit work?', 'The federal solar tax credit allows you to deduct a percentage of the cost of installing a solar energy system from your federal taxes. Consult your tax professional for details.'],
    ['Will I still receive an electric bill?', 'You will still receive a bill from your utility, but it may be $0 or show a credit if you generate more electricity than you use, depending on your local net metering policies.']
];
foreach ($faqs as $faq): ?>
						<details class="group bg-white/5 border border-white/10 rounded-xl overflow-hidden leading-6">
							<summary class="flex items-center justify-between cursor-pointer list-none p-5 text-white font-medium hover:text-solar-yellow transition-colors">
								<?php echo $faq[0]; ?>
								<span class="ml-4 flex-shrink-0 transition-transform duration-300 group-open:rotate-180">
									<svg class="w-5 h-5 text-solar-gray" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
								</span>
							</summary>
							<div class="px-5 pb-5 text-solar-light/70 text-sm">
								<?php echo $faq[1]; ?>
							</div>
						</details>
						<?php
endforeach; ?>
					</div>
					
					<div class="mt-8 p-6 bg-solar-cyan/10 border border-solar-cyan/20 rounded-xl">
						<h4 class="font-bold text-white mb-2">Still have questions?</h4>
						<p class="text-sm text-solar-light/70 mb-4">Our dedicated support team is available to help clarify any doubts.</p>
						<a href="#" class="text-sm font-bold text-solar-cyan hover:text-solar-yellow transition-colors flex items-center gap-2">Contact Support <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></a>
					</div>
				</div>

			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
