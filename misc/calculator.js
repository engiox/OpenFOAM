// Call this function when form is submitted
function readNumbersCellHeight(form){

    // Check that function is called
    console.log("Form submitted !");

    // Extract values from form (check name)
    flowVelocityEntry = form.flowVelocity.value;    
    lengthScaleEntry = form.lengthScale.value;
    dynamicViscosityEntry = form.dynamicViscosity.value;
    densityEntry = form.density.value;
    yPlusEntry = form.yPlus.value;

    // Check for empty entries
    if (flowVelocityEntry =="" || lengthScaleEntry =="" || dynamicViscosityEntry =="" || densityEntry =="" || yPlusEntry ==""){
        alert("Please Fill in All Fields :)")
        return false
    }

    // Check if the entries are numbers
    if (isNaN(flowVelocityEntry) || isNaN(lengthScaleEntry) || isNaN(dynamicViscosityEntry) || isNaN(densityEntry) || isNaN(yPlusEntry)){
        alert("Please Enter Numbers Only :)")
        return false;
    }

    // Check if the numbers are positive
    if(flowVelocityEntry < 0 || lengthScaleEntry < 0 || dynamicViscosityEntry < 0 || densityEntry < 0 || yPlusEntry < 0){
        alert("Please Enter Positive Numbers :)")
        return false
    }

    // Check for zero values
    if(flowVelocityEntry == 0 || lengthScaleEntry == 0 || dynamicViscosityEntry == 0 || densityEntry == 0 || yPlusEntry == 0){
        alert("Please Enter Non-Zero Values :)")
        return false
    }

    // Processing 

    // Convert entries to floats
    var flowVelocity = parseFloat(flowVelocityEntry);
    var lengthScale = parseFloat(lengthScaleEntry);
    var dynamicViscosity = parseFloat(dynamicViscosityEntry);
    var density = parseFloat(densityEntry);
    var yPlus = parseFloat(yPlusEntry);

    // Perform Calulations
    var Re = (density*flowVelocity*lengthScale)/dynamicViscosity;
    var cf = Math.pow(2.0*Math.log10(Re)-0.65,-2.3);
    var tau = cf*0.5*density*flowVelocity*flowVelocity;
    var utau = Math.sqrt(tau/density);
    var yTarget = (yPlus*dynamicViscosity)/(density*utau);
    var yHTarget = 2.0*yTarget;

    //console.log("Re =     " + Re);
    //console.log("Cf =     " + cf);
    //console.log("tau =    " + tau);
    //console.log("uTau =   " + utau);
    //console.log("yTarget =" + yTarget);

    // Format the output
    var ReExponential = Re.toExponential(1);
    var yTargetExponetial = yTarget.toExponential(1);
    var yHTargetExponential = yHTarget.toExponential(1);

    // Send the output back
    form.Re.value = ReExponential;
    form.yp.value = yTargetExponetial;
    form.yH.value = yHTargetExponential;
}

// Call this function when form is submitted
function readNumbersHumidity(form){

    // Check that function is called
    console.log("Form submitted !");

    // Extract values from form (check name)
    temperatureEntry = form.temperature.value;  
    pressureEntry = form.pressure.value;
    relativeHumidityEntry = form.relativeHumidity.value;

    // Check for empty entries
    if (temperatureEntry =="" || pressureEntry =="" || relativeHumidityEntry =="" ){
        alert("Please Fill in All Fields :)")
        return false
    }

    // Check if the entries are numbers
    if (isNaN(temperatureEntry) || isNaN(pressureEntry) || isNaN(relativeHumidityEntry)){
        alert("Please Enter Numbers Only :)")
        return false;
    }

    // Check that relative humidity is between 0 and 1
    if(relativeHumidityEntry < 0 || relativeHumidityEntry > 1){
        alert("Please Enter Relative Humidity between 0 and 1 :)")
        return false
    }

    // Check that pressure is positive
    if(pressureEntry < 0){
        alert("Please Enter a Positive Pressure :)")
        return false
    }

    // Check for zero values
    if(pressureEntry == 0 || relativeHumidityEntry == 0){
        alert("Please Enter Non-Zero Values :)")
        return false
    }

    // Check that temperature is above absolute zero
    if(temperatureEntry < -273.15){
        alert("Please enter temperatures above absolute zero :)")
        return false
    }

    // Processing 

    // Convert entries to floats
    var temperatureCelsius = parseFloat(temperatureEntry);
    var pressure = parseFloat(pressureEntry);
    var relativeHumidity = parseFloat(relativeHumidityEntry);

    // Perform Calulations
    var temperatureKelvin = temperatureCelsius + 273.15;

    if (temperatureCelsius > 0){
        saturationPressure = 1000*0.61121*Math.exp((18.678 - (temperatureCelsius/234.5))*(temperatureCelsius/(257.14+temperatureCelsius)));
    }else{
        saturationPressure = 1000*0.61115*Math.exp((23.036 - (temperatureCelsius/333.7))*(temperatureCelsius/(279.82+temperatureCelsius)));
    }

    var waterVapourPartialPressure = saturationPressure*relativeHumidity;

    // Molar masses of air and water vapour [kg/kmol]
    var molarMassAir = 28.97; 
    var molarMassWaterVapour = 18.02;
    var specificHumidity = (molarMassWaterVapour/molarMassAir)*(waterVapourPartialPressure/(pressure - waterVapourPartialPressure));
    var absoluteHumidity = (specificHumidity)/(1+specificHumidity);
    var massfraction = absoluteHumidity;

    //console.log("Pg =     " + saturationPressure);
    //console.log("Ph20 =     " + waterVapourPartialPressure);
    //console.log("omega =    " + specificHumidity);
    //console.log("varphi =   " + absoluteHumidity);
    //console.log("massfraction =" + massfraction);

    // Format the output
    var specificHumidityExponential = specificHumidity.toExponential(2);
    var absoluteHumidityExponetial = absoluteHumidity.toExponential(2);
    var massfractionExponential = massfraction.toExponential(2);

    // Send the output back
    form.specificHumidity.value = specificHumidityExponential;
    form.absoluteHumidity.value = absoluteHumidityExponetial;
    form.massFraction.value = massfractionExponential;
}

// Call this function when form is submitted
function readNumbersTurbulence(form){

    // Check that function is called
    //console.log("Form submitted !");

    // Extract values from form (check name)
    flowVelocityEntry = form.flowVelocity.value;
    intensityEntry = form.intensity.value;  
    lengthScaleEntry = form.lengthScale.value;

    // Check for empty entries
    if (flowVelocityEntry =="" || intensityEntry =="" || lengthScaleEntry ==""){
        alert("Please Fill in All Fields :)")
        return false
    }

    // Check if the entries are numbers
    if (isNaN(flowVelocityEntry) || isNaN(intensityEntry) || isNaN(lengthScaleEntry)){
        alert("Please Enter Numbers Only :)")
        return false;
    }

    // Check if the numbers are positive
    if(flowVelocityEntry < 0 || intensityEntry < 0 || lengthScaleEntry < 0){
        alert("Please Enter Positive Numbers :)")
        return false
    }

    // Check for zero values
    if(flowVelocityEntry == 0 || intensityEntry == 0 || lengthScaleEntry == 0){
        alert("Please Enter Non-Zero Values :)")
        return false
    }

    // Processing 

    // Convert entries to floats
    var flowVelocity = parseFloat(flowVelocityEntry);
    var intensity = parseFloat(intensityEntry);
    var lengthScale = parseFloat(lengthScaleEntry);

    // Perform Calulations
    var k = 1.5*flowVelocity*flowVelocity*(0.01*intensity)*(0.01*intensity);
    var Cmu = 0.09;
    var epsilon = Cmu*Math.pow(k, 1.5)/lengthScale;
    var omega = epsilon/(Cmu*k);
    var nut = k/omega;

    //console.log("k =     " + k);
    //console.log("Cmu =     " + Cmu);
    //console.log("epsion =    " + epsilon);
    //console.log("omega =   " + omega);
    //console.log("nut =" + nut);

    // Format the output
    var kExponential = k.toExponential(2);
    var epsilonExponetial = epsilon.toExponential(2);
    var omegaExponential = omega.toExponential(2);
    var nutExponential = nut.toExponential(2);

    // Send the output back
    form.k.value = kExponential;
    form.epsilon.value = epsilonExponetial;
    form.omega.value = omegaExponential;
    form.nut.value = nutExponential;
}

// Call this function when form is submitted
function readNumbersParticleSettling(form){

    // Check that function is called
    //console.log("Form submitted !");

    // Extract values from form (check name)
    diameterEntry = form.diameter.value;    
    densityEntry = form.particleDensity.value;

    // Air, Oil or Water
    fluidChoice = form.fluidChoice.value;

    // Check for empty entries
    if (diameterEntry =="" || densityEntry ==""){
        alert("Please Fill in All Fields :)")
        return false
    }

    // Check if the entries are numbers
    if (isNaN(diameterEntry) || isNaN(densityEntry)){
        alert("Please Enter Numbers Only :)")
        return false;
    }

    // Check that diameter is not too large!
    if(diameterEntry > 0.01){
        alert("Please Enter a Particle Diameter < 1cm :)")
        return false
    }

    // Check that values are positive
    if(diameterEntry < 0 || densityEntry < 0){
        alert("Please Enter a Positive Values :)")
        return false
    }

    // Check for zero values
    if(diameterEntry == 0 || densityEntry == 0){
        alert("Please Enter Non-Zero Values :)")
        return false
    }

    // Processing 

    // Convert entries to floats
    var diameter = parseFloat(diameterEntry);
    var particleDensity = parseFloat(densityEntry);

    // Perform Calulations

    // Start by getting the density and viscosity of the fluid
    if (fluidChoice == 'Water'){
        fluidDensity = 1000;
        fluidViscosity = 1e-3;
        //console.log('Water');
    }
    if (fluidChoice == 'Air'){
        fluidDensity = 1.225;
        fluidViscosity = 1.81e-5;
        //console.log('Air');
    }

    // Calculate an initial guess (the Stokes Velocity solution)
    var settlingVelocity = calcSettlingVelocity(diameter, particleDensity, fluidDensity, fluidViscosity, 1.0);
    var reynoldsNumber = calcReynoldsNumber(fluidDensity, settlingVelocity, diameter, fluidViscosity);
    var dragFunction = calcDragFunction(reynoldsNumber);
    var cd = calccd(dragFunction, reynoldsNumber);

    // Temporary Values
    var settlingVelocityOld = 1.0;

    // Iteration Loops
    // -----------------------------------------------------------------------

    var err = 1.0;
    var iterNum = 1;
    var relaxationFactor = 0.5

    while (iterNum < 30 && Math.abs(err) > 1e-6){

        // Update velocity and under-relax for stability
        settlingVelocityOld = settlingVelocity;
        settlingVelocityNew = calcSettlingVelocity(diameter, particleDensity, fluidDensity, fluidViscosity, dragFunction);
        settlingVelocity = (relaxationFactor*settlingVelocityOld) + ((1.0 - relaxationFactor)*settlingVelocityNew)

        // Compute Re, Drag function and update
        reynoldsNumber = calcReynoldsNumber(fluidDensity, settlingVelocity, diameter, fluidViscosity);
        dragFunction = calcDragFunction(reynoldsNumber);
        err = settlingVelocity - settlingVelocityOld;   

        // Print error and update counter
        //console.log(iterNum, settlingVelocity, err)
        iterNum = iterNum + 1;  
    }

    // -----------------------------------------------------------------------

    // Printing and Output
    //console.log("settlingVelocity =     " + settlingVelocity);
    //console.log("reynoldsNumber =     " + reynoldsNumber);
    //console.log("dragFunction =    " + dragFunction);
    //console.log("cd =   " + cd);

    // Send the output back
    form.reynoldsNumber.value = reynoldsNumber.toExponential(2);
    form.cd.value = cd.toFixed(1);
    form.settlingVelocity.value = settlingVelocity.toExponential(2);
}

// Functions to perform calculations
function calcSettlingVelocity(diameter, particleDensity, fluidDensity, fluidViscosity, dragFunction){
    var gravity = 9.81;
    var settlingVelocity = gravity*diameter*diameter*(particleDensity - fluidDensity)/(18*fluidViscosity*dragFunction);
    return settlingVelocity;
}

function calcReynoldsNumber(fluidDensity, settlingVelocity, diameter, fluidViscosity){
    return (fluidDensity*settlingVelocity*diameter)/fluidViscosity;
}

function calcDragFunction(reynoldsNumber){
    var dragFunction = 1.0;
    if(reynoldsNumber <= 1000){
        dragFunction = 1 + 0.15*Math.pow(reynoldsNumber, 0.687);
    }else{
        dragFunction = 0.0183*reynoldsNumber; 
    }
    return dragFunction;
}

function calccd(dragFunction, reynoldsNumber){
    return dragFunction*24/reynoldsNumber;
}