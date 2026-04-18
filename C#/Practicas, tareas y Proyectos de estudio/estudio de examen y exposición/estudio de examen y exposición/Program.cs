using System;

namespace EstudioDeExamenYExposicion
{
    class Program
    {
        public static void Main(string[] args)
        {
            while (true)
            {
                Console.WriteLine("Bienvenido a este script de estudio");
                Console.WriteLine("¿Desea ver información sobre los componentes de la placa base o sobre las generaciones de las mismas? (escriba su respuesta en lenguaje natural).");
                
                string opcion = Console.ReadLine();
                opcion = opcion.ToLower();
                
                if (opcion.Contains("componentes"))
                {
                    while (true)
                    {
                        Console.WriteLine("\n\n\n¿Desea ver una lista de los componentes más esenciales de la placa base? (Ingrese la palabra 'lista')\n");
                        string componente = Console.ReadLine();
                        componente = componente.ToLower();
                        
                        if (componente.Contains("lista"))
                        {
                            Console.WriteLine("Zócalo de CPU (Socket) \nChipset \nRanuras de RAM \nConectores de alimentación \nRanuras de Expansión (PCI, PCI Express) \nBIOS/UEFI \nConectores SATA y M.2 \nConectores USB y Panel Frontal \nCMOS y batería de la CMOS.");
                        }
                        else if (componente.Contains("zocalo"))
                        {
                            Console.WriteLine("Zócalo de CPU: \nEs el receptáculo o lugar designado para la instalación del microprocesador, es indispensable para el funcionamiento del computador (cerebro del procesamiento del equipo informático).");
                        }
                        else if (componente.Contains("chipset"))
                        {
                            Console.WriteLine("Chipset: \nEs un conjunto de circuitos integrados que se encargan de estabilizar la comunicación entre los demás componentes de la placa base (RAM, Procesador, Disco duro...).");
                        }
                        else if (componente.Contains("ram"))
                        {
                            Console.WriteLine("Socket de Memoria RAM: \nEs la estructura encargada de conectar los módulos de memoria RAM con la placa madre, permitiendo así su eficaz comunicación con los demás componentes y consolidando así la ejecución de los procesos concernientes a este componente.");
                        }
                        else if (componente.Contains("alimentacion"))
                        {
                            Console.WriteLine("Conectores de Alimentación: \nSe encargan de brindar alimentación eléctrica a la placa base y a los componentes conectados a la misma.");
                        }
                        else if (componente.Contains("expansion"))
                        {
                            Console.WriteLine("Ranuras de expansión: \nSon sockets libres en la placa base los cuales se diseñan y usan para conectar tarjetas externas (de video, gráficas, de red, de audio, etc.)");
                        }
                        else if (componente.Contains("bios"))
                        {
                            Console.WriteLine("BIOS/UEFI: \nEs el programa que gestiona los recursos de encendido e inicio del hardware y software del computador.");
                        }
                        else if (componente.Contains("sata") || componente.Contains("m.2"))
                        {
                            Console.WriteLine("Conectores SATA o M.2: \nConectores que permiten conectar dispositivos de almacenamiento como discos duros HDD y SSD.");
                        }
                        else if (componente.Contains("usb") || componente.Contains("frontal"))
                        {
                            Console.WriteLine("Puertos USB y Paneles Frontales: \nPermiten conectar dispositivos externos (pendrives, discos externos, cables...)");
                        }
                        else if (componente.Contains("cmos") || componente.Contains("bateria"))
                        {
                            Console.WriteLine("CMOS y Batería del CMOS: \nSe encarga de almacenar la configuración de inicio del sistema y la batería mantiene activo el CMOS mientras el computador no está en funcionamiento.");
                        }
                        else
                        {
                            Console.WriteLine("No se reconoció la opción. Intente de nuevo.");
                        }
                    }
                }
                else if (opcion.Contains("generaciones"))
                {
                    Console.WriteLine("A continuación se muestra una lista de las generaciones de las placas madre de los computadores: \nPlaca Base XT (1980) \nPlaca Base AT (1984) \nPlaca Base ATX (1995) \nPlaca Base Micro-ATX (1996) \nPlaca Base Mini-ITX (2001) \nPlaca Base BTX (2004) \nPlaca Base E-ATX (2007) \nGeneraciones recientes (2010 en adelante)");
                    
                    while (true)
                    {
	                    Console.WriteLine("Ingrese la generación de la que quiere más inforación\n\n\n");
	                    string generacion = Console.ReadLine();
	                    generacion = generacion.ToLower();
	                    
	                    if (generacion.Contains("xt"))
	                    {
	                    	Console.WriteLine("Placa Base XT (1980): \n- Características: Fue una de las primeras placas base, utilizada en los primeros PC compatibles con IBM. Tenía un bus de 8 bits y era muy básica.\n-Importancia: Marcó el inicio de la era de las placas base en los computadores personales.");
	                    }
	                    else if (generacion.Contains("at"))
	                    {
	                    	Console.WriteLine("Placa Base AT (1984): \n- Características: Introdujo el bus ISA de 16 bits, mejorando significativamente la capacidad de expansión. El IBM PC/AT popularizó este formato.\n-Importancia: Permitió la expansión del sistema con tarjetas adicionales.");
	                    }
	                    else if(generacion.Contains("atx"))
	                    {
	                    	Console.WriteLine("Placa Base ATX (1995): \n- Características: Desarrollada por Intel, introdujo un diseño más eficiente en términos de enfriamiento y espacio. Ofrecía más ranuras de expansión y soporte para USB.\n-Importancia: Se convirtió en el estándar más común debido a su flexibilidad y eficiencia.");
	                    }
	                    else if (generacion.Contains("micro-atx"))
	                    {
	                    	Console.WriteLine("Placa Base Micro-ATX (1996): \n- Características: Diseñada para ser más compacta que la ATX, manteniendo muchas de sus características. Ideal para sistemas más pequeños.\n-Importancia: Popular en ordenadores de escritorio más pequeños.");
	                    }
	                    else if (generacion.Contains("mini-itx"))
	                    {
	                             	Console.WriteLine("Placa Base Mini-ITX (2001): \n- Características: Muy compacta, diseñada para sistemas de bajo consumo y tamaño reducido. Ideal para HTPCs y sistemas integrados.\n-Importancia: Permitió la creación de sistemas muy pequeños y eficientes.");
	                    }
	                    else if (generacion.Contains("btx"))
	                    {
	                    	Console.WriteLine("Placa Base BTX (2004): \n- Características: Fue diseñada para mejorar la eficiencia térmica, colocando componentes críticos en la parte frontal. Sin embargo, no logró popularidad.\n-Importancia: Intentó mejorar el enfriamiento, pero no se adoptó ampliamente.");
	                    }
	                    else if (generacion.Contains("e-atx"))
	                    {
	                    	Console.WriteLine("Placa Base E-ATX (2007): \n- Características: Una versión más grande de la ATX, ofreciendo más ranuras de expansión y puertos. Usada en sistemas de alto rendimiento.\n-Importancia: Ideal para estaciones de trabajo y servidores.");
	                    }
	                    else
	                    {
	                    	Console.WriteLine("Generaciones recientes (2010 en adelante): \n- Características: Incluyen mejoras como PCIe 4.0, USB-C, NVMe, y soporte para tecnologías emergentes como Thunderbolt 4 y conectividad 5G.\n-Importancia: Continúan evolucionando para satisfacer las necesidades de rendimiento y conectividad modernas");
	                    	
	                    	break;
	                    }
                    }
                }
                else
                {
                    Console.WriteLine("Opción no válida. Saliendo del programa. \n\n\n");
                    break;
                }
            }

            Console.ReadKey(true);
        }
    }
}
