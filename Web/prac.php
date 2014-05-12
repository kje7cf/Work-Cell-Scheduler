<?xml version="1.0" encoding="UTF-8"?>
<osil xmlns="os.optimizationservices.org" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="os.optimizationservices.org http://www.optimizationservices.org/schemas/OSiL.xsd">
	<instanceHeader>
		<name>First OSiL Example</name>
		<source>Timothy Middelkoop</source>
		<description>
			min -x -2y
			s.t.:
     			x  + y &lt;= 40
    			2x + y &lt;= 60
    			x &gt;=0, y &gt;= 0
    			
    		Solution -80 @(x=0,y=40)
    						
			OSSolverService -osil first.osil -osrl first.osrl
		</description>
	</instanceHeader>
	<instanceData>
		<variables numberOfVariables="2">
			<var name="x" />
			<var name="y" />
		</variables>
		<objectives>
			<obj maxOrMin="min" numberOfObjCoef="2">
				<coef idx="0">-1</coef>
				<coef idx="1">-2</coef>
			</obj>
		</objectives>
		<constraints numberOfConstraints="2">
			<con ub="40"/>
			<con ub="60"/>
		</constraints>
		<linearConstraintCoefficients numberOfValues="4">
			<start>
				<el>0</el>
				<el>2</el>
				<el>4</el>
			</start>
			<colIdx>
				<el>0</el><el>1</el>
				<el>0</el><el>1</el>
			</colIdx>
			<value>
				<el>1</el><el>1</el>
				<el>2</el><el>1</el>			
			</value>
		</linearConstraintCoefficients>
	</instanceData>
</osil>