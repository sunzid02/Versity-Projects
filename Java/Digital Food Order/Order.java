import java.awt.*;

import javax.imageio.ImageIO;
import javax.swing.*;
import javax.swing.table.DefaultTableModel;

import java.awt.event.*;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;

class WindowKeeper extends WindowAdapter
{
	public void windowClosing(WindowEvent a){
		//System.out.println("Window is closing");
		System.exit(0);
	}
}

//-----------------------------------------------------

class WindowSensor extends WindowAdapter{
	public void windowClosing(WindowEvent we){
        System.out.println("Window is closing");
		System.exit(0);
	}
}
//------------------------------------------------------------

class Order 
{
	public static int sum = 0;
	public static int orderSerial = 0 ;
	
	public static void main( String args [])
	{
		//..............Frame no 1/main frame.............//
		JFrame or1 = new JFrame("Digital Food Order");
		or1.setVisible(true);
		or1.setLayout(null);
		or1.setSize(400,400);
		or1.getContentPane().setBackground(Color.cyan);
		
		JButton customer = new JButton("CUSTOMER");
		customer.setForeground(Color.black);
		customer.setBounds(100,50,200,100);
		or1.add(customer);
		
		JLabel userName = new JLabel("Username");
		userName.setForeground(Color.blue);
		userName.setBounds(10,200,100,20);
		or1.add(userName);
				
		JTextField usernameTxt = new JTextField();
		usernameTxt.setBounds(130, 200, 100, 20);
		or1.add(usernameTxt);
		
		JLabel password = new JLabel("Password");
		password.setForeground(Color.blue);
		password.setBounds(10,250,100,20);
		or1.add(password);
		
		
					
		
		//password hide starts.........
		
		JPasswordField passwordTxt = new JPasswordField(20);
		passwordTxt.setEchoChar('*');
		passwordTxt.setBounds(130, 250, 100, 20);
		or1.add(passwordTxt);
		
		//password hide ends.........
		
		/*JTextField passwordTxt = new JTextField();
		passwordTxt.setBounds(120, 200, 100, 20);
		or1.add(passwordTxt);*/
		JTextField ut = usernameTxt;
		JTextField pt = passwordTxt;
		
		JButton login = new JButton("Log IN");
		login.setBounds(25, 285, 100, 20);
		or1.add(login);
		
		
		
		//.........Main Frame Ends.............//
		
//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<" COOK ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>		
		// login check----------------------------------

		
		login.addActionListener(new ActionListener()
		{
			public void actionPerformed( ActionEvent e)
			{
				String s1=usernameTxt.getText();
		        String s2=passwordTxt.getText();
				
				//cook frame starts-----------------
				if(s1.equals("cook") && s2.equals("cook123"))
		        {
					or1.setVisible(false);
					JFrame cookOption = new JFrame("COOK OPTION");
					cookOption.setVisible(true);
					cookOption.setSize(270,300);
					cookOption.setLayout(null);
					cookOption.getContentPane().setBackground(Color.ORANGE);
				
					JButton showOrder = new JButton("Table 1 Order");
					showOrder.setBounds(40,60,150,50);
					cookOption.add(showOrder);
					
					JButton showOrder2 = new JButton("Table 2 Order");
					showOrder2.setBounds(40,130,150,50);
					cookOption.add(showOrder2);
					
					JButton logOut = new JButton("Log Out");
					logOut.setBounds(40, 200, 152, 50);
					cookOption.add(logOut);
					
					logOut.addActionListener(new ActionListener()
					{
						public void actionPerformed(ActionEvent e)
						{
							
							cookOption.setVisible(false);
							or1.setVisible(true);
							
							ut.setText("");
							pt.setText("");
							
						}
					});
					
					WindowKeeper wk=new WindowKeeper();
					cookOption.addWindowListener(wk);
					
			// ........cook table1 ar order  dekhbe....
			showOrder.addActionListener(new ActionListener()
			{
				public void actionPerformed(ActionEvent e)
				{
					cookOption.setVisible(false);
					
					JFrame orderedItem = new JFrame("Ordered Item");
					orderedItem.setVisible(true);
					orderedItem.setSize(400, 400);
					orderedItem.setLayout(new FlowLayout());
					orderedItem.getContentPane().setBackground(Color.orange);
					
					JButton back = new JButton("Back");
					back.setBounds(200, 50, 50, 30);
					orderedItem.add(back);
					
					JButton update1 = new JButton("Update");
					update1.setBounds(250, 50,50,30);
					orderedItem.add(update1);
					
					//cook table update korbe..... yes/no--------
					update1.addActionListener(new ActionListener()
					{
						public void actionPerformed(ActionEvent e)
						{
							JFrame upFrame1 = new JFrame("Update");
							upFrame1.setLocation(450,220);
							upFrame1.setVisible(true);
							upFrame1.setSize(300, 450);
							upFrame1.setLayout(null);
							upFrame1.getContentPane().setBackground(Color.orange);
							
							JButton b=new JButton("OK");
							TextField tf=new TextField(10);
							TextField tf2=new TextField(10);
							TextField tf3=new TextField(10);
							TextField tf4=new TextField(10);
							
							JLabel bfc1 = new JLabel("Item No: ");
							bfc1.setBounds(10,10,100,20);
							upFrame1.add(bfc1);
							
							tf.setBounds(120, 10, 100, 20);
							upFrame1.add(tf);
							
							JLabel bfc2 = new JLabel("Insert Item Name: ");
							bfc2.setBounds(10,50,100,20);
							upFrame1.add(bfc2);
							
							tf2.setBounds(120, 50, 100, 20);
							upFrame1.add(tf2);
							
							JLabel bfc3 = new JLabel("Quantity: ");
							bfc3.setBounds(10,100,100,20);
							upFrame1.add(bfc3);
							
							tf3.setBounds(120, 100, 100, 20);
							upFrame1.add(tf3);
							
							JLabel bfc4 = new JLabel("Served: ");
							bfc4.setBounds(10,150,100,20);
							upFrame1.add(bfc4);
							
							tf4.setBounds(120,150,100,20);
							upFrame1.add(tf4);
							
							JButton up = new JButton("Update");
							up.setBounds(120, 200, 80, 50);
							upFrame1.add(up);
							
							JButton exit = new JButton("Back");
							exit.setBounds(120, 300, 80, 50);
							upFrame1.add(exit);
							
							
							
							//cook frame ar update button...click korle hpdate hbe---
							up.addActionListener(new ActionListener()
							{
								public void actionPerformed(ActionEvent e) 
								{
									String s1=tf.getText();
									String s2=tf2.getText();
									String s3=tf3.getText();
									String s4=tf4.getText();
									
									System.out.println(s1);
									System.out.println(s4);
								    DBTest d = new DBTest(s1,s2,s3,s4);
									d.UpdatTable1();
									System.out.println("1 Row updated");
									JFrame yes = new JFrame("SUCCESS");
									JOptionPane.showMessageDialog(yes, "Update Confirmed for table 1");	
								}
							});
							
							exit.addActionListener(new ActionListener()
							{
								public void actionPerformed(ActionEvent e)
								{
									upFrame1.setVisible(false);
								}
							});
							
							
						}
					});
					
					back.addActionListener(new ActionListener()
					{
						public void actionPerformed(ActionEvent e)
						{
							orderedItem.setVisible(false) ;
							//upframe1.setVisible(false);
							cookOption.setVisible(true);
						}
					});
					
					String c[]={"Item_No","Item_Name","Quantity","Served"};
					DefaultTableModel model = new DefaultTableModel();
					
					for(int i=0;i<c.length;i++)
					{
						model.addColumn(c[i]); 
					}
					JTable table = new JTable(model);
					model = (DefaultTableModel) table.getModel();
					DBTest db = new DBTest(model) ;
					
					db.showOrderedTable();
					
					JScrollPane jsp=new JScrollPane(table); 
					orderedItem.add(jsp);
	                table.setPreferredScrollableViewportSize(new Dimension(orderedItem.getWidth()-10,400));
				}

			});
			// ........cook table1 ar order  dekhbe... ENDS..............................
			
			// ........cook TABLE2 ar order  dekhbe... STARTS..............................
			
			showOrder2.addActionListener(new ActionListener()
			{
				public void actionPerformed(ActionEvent e)
				{
					cookOption.setVisible(false);
					
					JFrame orderedItem = new JFrame("Ordered Item");
					orderedItem.setVisible(true);
					orderedItem.setSize(400, 400);
					orderedItem.setLayout(new FlowLayout());
					orderedItem.getContentPane().setBackground(Color.orange);
					
					JButton back = new JButton("Back");
					back.setBounds(200, 50, 50, 30);
					orderedItem.add(back);
					
					JButton update2 = new JButton("Update");
					update2.setBounds(250, 50,50,30);
					orderedItem.add(update2);
					
					//cook table update korbe..... yes/no--------
					update2.addActionListener(new ActionListener()
					{
						public void actionPerformed(ActionEvent e)
						{
							JFrame upFrame1 = new JFrame("Update");
							upFrame1.setVisible(true);
							upFrame1.setLocation(450,220);
							upFrame1.setSize(300, 450);
							upFrame1.setLayout(null);
							upFrame1.getContentPane().setBackground(Color.orange);
								
							
							JButton b=new JButton("OK");
							TextField tf=new TextField(10);
							TextField tf2=new TextField(10);
							TextField tf3=new TextField(10);
							TextField tf4=new TextField(10);
							
							JLabel bfc1 = new JLabel("Item No: ");
							bfc1.setBounds(10,10,100,20);
							upFrame1.add(bfc1);
							
							tf.setBounds(120, 10, 100, 20);
							upFrame1.add(tf);
							
							JLabel bfc2 = new JLabel("Item Name: ");
							bfc2.setBounds(10,50,100,20);
							upFrame1.add(bfc2);
							
							tf2.setBounds(120, 50, 100, 20);
							upFrame1.add(tf2);
							
							JLabel bfc3 = new JLabel("Quantity: ");
							bfc3.setBounds(10,100,100,20);
							upFrame1.add(bfc3);
							
							tf3.setBounds(120, 100, 100, 20);
							upFrame1.add(tf3);
							
							JLabel bfc4 = new JLabel("Served: ");
							bfc4.setBounds(10,150,100,20);
							upFrame1.add(bfc4);
							
							tf4.setBounds(120,150,100,20);
							upFrame1.add(tf4);
							
							JButton up = new JButton("Update");
							up.setBounds(120, 200, 80, 50);
							upFrame1.add(up);
							
							JButton exit = new JButton("Exit");
							exit.setBounds(120, 300, 80, 50);
							upFrame1.add(exit);
							
							//cook frame ar update button...click korle hpdate hbe---
							up.addActionListener(new ActionListener()
							{
								public void actionPerformed(ActionEvent e) 
								{
									String s1=tf.getText();
									String s2=tf2.getText();
									String s3=tf3.getText();
									String s4=tf4.getText();
									
									System.out.println(s1);
									System.out.println(s4);
								    DBTest d = new DBTest(s1,s2,s3,s4);
									d.UpdatTable2();
									System.out.println("1 Row updated");
									JFrame yes = new JFrame("SUCCESS");
									JOptionPane.showMessageDialog(yes, "Update Confirmed for table 2");	
									
								}
							});
							
							exit.addActionListener(new ActionListener()
							{
								public void actionPerformed(ActionEvent e)
								{
									upFrame1.setVisible(false);
								}
							});
							
							
						}
					});
					
					back.addActionListener(new ActionListener()
					{
						public void actionPerformed(ActionEvent e)
						{
							orderedItem.setVisible(false) ;
							//upframe1.setVisible(false);
							cookOption.setVisible(true);
						}
					});
					
					String c[]={"Item_No","Item_Name","Quantity","Served"};
					DefaultTableModel model = new DefaultTableModel();
					
					for(int i=0;i<c.length;i++)
					{
						model.addColumn(c[i]); 
					}
					JTable table = new JTable(model);
					model = (DefaultTableModel) table.getModel();
					DBTest db = new DBTest(model) ;
					
					db.showOrderedTable2();
					
					JScrollPane jsp=new JScrollPane(table); 
					orderedItem.add(jsp);
	                table.setPreferredScrollableViewportSize(new Dimension(orderedItem.getWidth()-10,400));
				}

			});
			
			
			// ........cook TABLE2 ar order  dekhbe... ENDS..............................
			
		}
//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		
//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<" ADMIN ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>		
	
		else if(s1.equals("admin") && s2.equals("admin123"))
		{
			or1.setVisible(false);
			System.out.println("Admin ar sob show korbe");
			
			JFrame admin = new JFrame("Admin");
			admin.setVisible(true);
			admin.setLayout(null);
			admin.setSize(300,500);
			admin.getContentPane().setBackground(Color.yellow);
			
			JButton addItem = new JButton("Add item");
			addItem.setBounds(40,30,150,50);
			admin.add(addItem);
	
			JButton deleteItem = new JButton("Delete item");
			deleteItem.setBounds(40,100,150,50);
			admin.add(deleteItem);
			
			JButton update = new JButton("Update item");
			update.setBounds(40,180,150,50);
			admin.add(update);
			
			JButton adminBack = new JButton("Log Out");
			adminBack.setBounds(40,340,150,50);
			admin.add(adminBack);
			
			adminBack.addActionListener(new ActionListener()
			{
				public void actionPerformed(ActionEvent e)
				{
					admin.dispose() ;
					or1.setVisible(true);
					ut.setText("");
					pt.setText("");
				}
			});
			
			update.addActionListener(new ActionListener()
			{
				public void actionPerformed( ActionEvent e )
				{
					admin.setVisible(false);
					JFrame updateFrame = new JFrame("Update Item");
					updateFrame.getContentPane().setBackground(Color.YELLOW);
					updateFrame.setSize(600,400);
					updateFrame.setLayout(null);
					updateFrame.setVisible(true);
					updateFrame.setLocation(550, 200);
					
					JButton b=new JButton("OK");
					TextField tf=new TextField(10);
					TextField tf2=new TextField(10);
					TextField tf3=new TextField(10);
					TextField tf4=new TextField(10);
					TextField tf5=new TextField(10);
					JButton addBack = new JButton("BACK") ;
					
					JLabel bfc1 = new JLabel("Item No: ");
					bfc1.setBounds(10,10,100,20);
					updateFrame.add(bfc1);
					
					tf.setBounds(120, 10, 100, 20);
					updateFrame.add(tf);
					
					JLabel bfc2 = new JLabel("Item Name: ");
					bfc2.setBounds(10,50,100,20);
					updateFrame.add(bfc2);
					
					tf2.setBounds(120, 50, 100, 20);
					updateFrame.add(tf2);
					
					JLabel bfc3 = new JLabel("Item Type: ");
					bfc3.setBounds(10,100,100,20);
					updateFrame.add(bfc3);
					
					tf3.setBounds(120, 100, 100, 20);
					updateFrame.add(tf3);
					
					JLabel bfc4 = new JLabel("Item Price: ");
					bfc4.setBounds(10,150,100,20);
					updateFrame.add(bfc4);
					
					tf4.setBounds(120,150,100,20);
					updateFrame.add(tf4);
					
					JLabel bfc5 = new JLabel("Item Status: ");
					bfc5.setBounds(10,200,100,20);
					updateFrame.add(bfc5);
					
					tf5.setBounds(120,200,100,20);
					updateFrame.add(tf5);
					
					b.setBounds(10,250,80,30);
					updateFrame.add(b);
					
					
					addBack.setBounds(110,250,80,30);
					updateFrame.add(addBack) ;
						
				
					b.addActionListener(new ActionListener()
					{
						public void actionPerformed(ActionEvent e) 
						{
							String s1=tf.getText();
							String s2=tf2.getText();
							String s3=tf3.getText();
							String s4=tf4.getText();
							String s5=tf5.getText();

							System.out.println(s1);
							System.out.println(s4);
						    DBTest d = new DBTest(s1,s2,s3,s4,s5);
							d.Update();
							JFrame yes = new JFrame("SUCCESS");
							JOptionPane.showMessageDialog(yes, "One item updated");
							
							System.out.println("1 Row inserted");
							
						}
					});
					
					
					
					//UPDATE TABLE SHOW FOR ADMIN........
					
					//updateFrame.setVisible(false);
					
					JFrame t1 = new JFrame("MENU");
					t1.setVisible(true);
					t1.setSize(480,500);
					t1.setLayout(new FlowLayout());
					//t1.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
					t1.getContentPane().setBackground(Color.yellow);
					
					String c[]={"Item_No","Item_Name","Item_Type","Item_Price","Item_Status"};
					DefaultTableModel model = new DefaultTableModel();
					
					for(int i=0;i<c.length;i++)
					{
						model.addColumn(c[i]); 
					}
					
					JTable table = new JTable(model);
					model = (DefaultTableModel) table.getModel();
					DBTest db = new DBTest(model) ;
					
					db.showTable();
					
					JScrollPane jsp=new JScrollPane(table); 
					t1.add(jsp);
	                table.setPreferredScrollableViewportSize(new Dimension(t1.getWidth()-10,400));
	                
	                addBack.addActionListener(new ActionListener()
					{
						public void actionPerformed(ActionEvent e)
						{
							updateFrame.setVisible(false);
							t1.setVisible(false);
							admin.setVisible(true);
							
						}
					});
					
					//UPDATE TABLE SHOW FOR ADMIN ENDS......

						WindowKeeper wk=new WindowKeeper();
						updateFrame.addWindowListener(wk);
				}
				
			});	
			
			//UPDATE TABLE SHOW FOR ADMIN ends........
			
			
	//Delete item SHOW FOR ADMIN starts......
			
			deleteItem.addActionListener(new ActionListener()
			{
				public void actionPerformed( ActionEvent e )
				{
					admin.setVisible(false);
					JFrame delete = new JFrame("Delete");
					delete.setVisible(true);
					delete.setSize(400,300);
					delete.setLocation(550, 200);
					delete.setLayout(null);
					delete.getContentPane().setBackground(Color.yellow);
				
					JLabel deleteLabel = new JLabel("ITEM NO:");
					deleteLabel.setBounds(50,40,100,20);
					delete.add(deleteLabel);	
					
					TextField deleteTxt = new TextField(10);
					deleteTxt.setBounds(150,40,100,20);
					delete.add(deleteTxt);
					
			//item table show starts
					JFrame t1 = new JFrame("MENU");
					t1.setVisible(true);
					t1.setSize(480,500);
					t1.setLayout(new FlowLayout());
					//t1.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
					t1.getContentPane().setBackground(Color.yellow);
					
					String c[]={"Item_No","Item_Name","Item_Type","Item_Price","Item_Status"};
					DefaultTableModel model = new DefaultTableModel();
					
					for(int i=0;i<c.length;i++)
					{
						model.addColumn(c[i]); 
					}
					
					JTable table = new JTable(model);
					model = (DefaultTableModel) table.getModel();
					DBTest db = new DBTest(model) ;
					
					db.showTable();
					
					JScrollPane jsp=new JScrollPane(table); 
					t1.add(jsp);
	                table.setPreferredScrollableViewportSize(new Dimension(t1.getWidth()-10,400));

		//item table show ends
					
					JButton ok = new JButton("OK");
					ok.setBounds(110,120,90,40);
					delete.add(ok);
					
					JButton deleteBack = new JButton("BACK");
					deleteBack.setBounds(220,120,90,40);
					delete.add(deleteBack);
				
					ok.addActionListener(new ActionListener()
					{
						public void actionPerformed( ActionEvent e)
						{
							String delTxt = deleteTxt.getText();
							DBTest d2 = new DBTest(delTxt,"","","","");
							d2.cookDelete();
							JFrame yes = new JFrame("SUCCESS");
							JOptionPane.showMessageDialog(yes, "One item deleted");
						}
					});
					
					deleteBack.addActionListener(new ActionListener()
					{
						public void actionPerformed(ActionEvent e)
						{
							delete.setVisible(false);
							t1.setVisible(false);
							admin.setVisible(true);
						}
					});
					
						WindowKeeper wk=new WindowKeeper();
						delete.addWindowListener(wk);
					
				}
				
			});
			
	//......Item add for admin starts		
			
			addItem.addActionListener(new ActionListener()
			{
				public void actionPerformed( ActionEvent a )
				{	
					admin.setVisible(false);
					JFrame addItemFrame = new JFrame("Add Item");
					
					addItemFrame.setSize(600,400);
					addItemFrame.setLocation(550, 200);
					//addItemFrame.setLocationRelativeTo(null);
					addItemFrame.setLayout(null);
					addItemFrame.setVisible(true);
					addItemFrame.getContentPane().setBackground(Color.YELLOW);
						
					JButton b=new JButton("OK");
					TextField tf=new TextField(10);
					TextField tf2=new TextField(10);
					TextField tf3=new TextField(10);
					TextField tf4=new TextField(10);
					TextField tf5=new TextField(10);
					JButton addBack = new JButton("BACK") ;
						
					JLabel bfc1 = new JLabel("Item No: ");
					bfc1.setBounds(10,10,100,20);
					addItemFrame.add(bfc1);
					
					tf.setBounds(120, 10, 100, 20);
					addItemFrame.add(tf);
						
					JLabel bfc2 = new JLabel("Item Name: ");
					bfc2.setBounds(10,50,100,20);
					addItemFrame.add(bfc2);
						
					tf2.setBounds(120, 50, 100, 20);
					addItemFrame.add(tf2);
						
					JLabel bfc3 = new JLabel("Item Type: ");
					bfc3.setBounds(10,100,100,20);
					addItemFrame.add(bfc3);
						
					tf3.setBounds(120, 100, 100, 20);
					addItemFrame.add(tf3);
						
					JLabel bfc4 = new JLabel("Item Price: ");
					bfc4.setBounds(10,150,100,20);
					addItemFrame.add(bfc4);
						
					tf4.setBounds(120,150,100,20);
					addItemFrame.add(tf4);
						
					JLabel bfc5 = new JLabel("Item Status: ");
					bfc5.setBounds(10,200,100,20);
					addItemFrame.add(bfc5);
						
					tf5.setBounds(120,200,100,20);
					addItemFrame.add(tf5);
						
					b.setBounds(10,250,80,30);
					addItemFrame.add(b);
						
					addBack.setBounds(110,250,80,30);
					addItemFrame.add(addBack) ;
					
					b.addActionListener(new ActionListener()
					{	
						public void actionPerformed(ActionEvent e) 
						{
							String s1=tf.getText();
							String s2=tf2.getText();
							String s3=tf3.getText();
							String s4=tf4.getText();
							String s5=tf5.getText();
								
							System.out.println(s1);
							System.out.println(s4);
							DBTest d = new DBTest(s1,s2,s3,s4,s5);
							d.Insert();
							System.out.println("1 Row inserted");
							JFrame yes = new JFrame("SUCCESS");
							JOptionPane.showMessageDialog(yes, "One item added");
								
						}
					});
					
				//item table show for add starts
					
					JFrame t1 = new JFrame("MENU");
					t1.setVisible(true);
					t1.setSize(480,500);
					t1.setLayout(new FlowLayout());
					//t1.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
					t1.getContentPane().setBackground(Color.yellow);
					
					String c[]={"Item_No","Item_Name","Item_Type","Item_Price","Item_Status"};
					DefaultTableModel model = new DefaultTableModel();
					
					for(int i=0;i<c.length;i++)
					{
						model.addColumn(c[i]); 
					}
					
					JTable table = new JTable(model);
					model = (DefaultTableModel) table.getModel();
					DBTest db = new DBTest(model) ;
					
					db.showTable();
					
					JScrollPane jsp=new JScrollPane(table); 
					t1.add(jsp);
	                table.setPreferredScrollableViewportSize(new Dimension(t1.getWidth()-10,400));
	                

					
				//item table show for add ends
						
					addBack.addActionListener(new ActionListener()
					{	
						public void actionPerformed(ActionEvent e) 
						{
								addItemFrame.setVisible(false) ;
								t1.setVisible(false);
								admin.setVisible(true);
						}
					});
				}
			
			});
			
			
			//...item add ends...
			
		}
		
				else
				{
					or1.setVisible(true);
					JFrame denidFrame = new JFrame();
					JOptionPane.showMessageDialog(denidFrame, "Wrong user name or password","Error",JOptionPane.ERROR_MESSAGE);
					
				}		
			}
	});
		
		//login check end----------------------------------
//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>		
		
//<<<<<<<<<<<<<<<<<<<<<<<<<<<<< " CUSTOMER " >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		
		customer.addActionListener( new ActionListener()
		{
			public void actionPerformed( ActionEvent e)
			{
				or1.setVisible(false);
				JFrame customerFrame = new JFrame("Customer Identity");
				customerFrame.setVisible(true);
				customerFrame.setLayout(null);
				customerFrame.setSize(400,400);
				customerFrame.getContentPane().setBackground(Color.red);
		
				JLabel customerName = new JLabel("Name:");
				customerName.setBounds(50,50,100,100);
				customerFrame.add(customerName);
				//customerName.setForeground(Color.BLUE);
				
				JTextField nameTxt = new JTextField();
				nameTxt.setBounds(150,140,105,20);
				customerFrame.add(nameTxt);
				
				JLabel mobileNo = new JLabel("Mobile No");
				mobileNo.setBounds(50,100,100,100);
				customerFrame.add(mobileNo);
				
				JTextField mobileTxt = new JTextField();
				mobileTxt.setBounds(150,90,105,20);
				customerFrame.add(mobileTxt);
				
				JLabel address = new JLabel("Address");
				address.setBounds(50,150,100,100);
				customerFrame.add(address);
				
				JTextField addressTxt = new JTextField();
				addressTxt.setBounds(150,190,105,20);
				customerFrame.add(addressTxt);
				
				JLabel table = new JLabel("TableNO");
				table.setBounds(50, 200, 100, 100);
				customerFrame.add(table);
				
				JTextField tableTxt = new JTextField();
				tableTxt.setBounds(150,240,105,20);
				customerFrame.add(tableTxt);
				
				JButton customerOk = new JButton("OK");
				customerOk.setBounds(160,280,90,30);
				customerFrame.add(customerOk);
				
				JButton back = new JButton("Back") ;
				back.setBounds(160,320,90,30);
				customerFrame.add(back);
				
				WindowKeeper wk=new WindowKeeper();
				customerFrame.addWindowListener(wk);
				
				customerOk.addActionListener( new ActionListener()
				{
					public void actionPerformed( ActionEvent e)
					{
						
						String name = nameTxt.getText();
						String mobNO = mobileTxt.getText();
						String addressss = addressTxt.getText();
						
						DBTest customerDataBaseTable = new DBTest(name,mobNO,addressss);
						customerDataBaseTable.insertCustomerInfo();
					}
				});
				
				back.addActionListener(new ActionListener() 
				{
					
					public void actionPerformed(ActionEvent e) 
					{
						customerFrame.setVisible(false);
						or1.setVisible(true);
					}
				});
				
				
			//..........CustomerButton frame 2 starts.................//
				
				customerOk.addActionListener(new ActionListener()
				{
					public void actionPerformed( ActionEvent a )
					{
						customerFrame.setVisible(false);
						
						JFrame t1 = new JFrame("MENU");
						t1.setVisible(true);
						t1.setSize(480,500);
						t1.setLayout(new FlowLayout());
						//t1.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
						t1.getContentPane().setBackground(Color.red);
						
						String c[]={"Item_No","Item_Name","Item_Type","Item_Price","Item_Status"};
						DefaultTableModel model = new DefaultTableModel();
						
						for(int i=0;i<c.length;i++)
						{
							model.addColumn(c[i]); 
						}
						
						JTable table = new JTable(model);
						model = (DefaultTableModel) table.getModel();
						
						DBTest db = new DBTest(model) ;
						
						db.showTable();
						
						JScrollPane jsp=new JScrollPane(table); 
						t1.add(jsp);
		                table.setPreferredScrollableViewportSize(new Dimension(t1.getWidth()-10,400));
		                
		                JFrame order = new JFrame("ORDER");
		                order.setSize(500, 450);
		                order.setLocationRelativeTo(null);
		                order.setLayout(null);
		                order.setVisible(true);
		                order.getContentPane().setBackground(Color.red);
		                
		                JLabel label1 = new JLabel("Enter NO: ") ;
		                label1.setBounds(10, 10, 75, 25);
		                order.add(label1);
		                
						JTextField getCode = new JTextField("10");
						getCode.setBounds(95,10,60,25);
						order.add(getCode);
						
						JLabel label2 = new JLabel("Quantity") ;
		                label2.setBounds(10, 50, 75, 25);
		                order.add(label2);
						
						JTextField quantity = new JTextField("0");
						quantity.setBounds(95,50,60,25);
						order.add(quantity);
						
						JLabel label3 = new JLabel("Price");
						label3.setBounds(10, 90, 75, 25) ;
						order.add(label3);
						
						JTextField price = new JTextField("0");
						price.setBounds(95,90,60,25);
						order.add(price);
						
					    JLabel total = new JLabel("Total");
					    total.setBounds(10,130,75,25);
					    order.add(total);
					    
					    JTextField totalTxt = new JTextField("0");
					    totalTxt.setBounds(95,130,60,25);
					    order.add(totalTxt);
						
						JLabel itemListLabel = new JLabel("ITEM LIST:");
						itemListLabel.setBounds(10,160,120,25);
						order.add(itemListLabel);
					    
					    JLabel l1 = new JLabel("0");
					    l1.setBounds(10,185,75,25);
					    order.add(l1);
					    
					    JLabel l2 = new JLabel("0");
					    l2.setBounds(35,185,75,25);
					    order.add(l2);
					    
					    JLabel l3 = new JLabel("0");
					    l3.setBounds(65,185,75,25);
					    order.add(l3);
						
					    JLabel l4 = new JLabel("0");
					    l4.setBounds(98,185,75,25);
					    order.add(l4);
					    
					    JLabel l5 = new JLabel("0");
					    l5.setBounds(131,185,75,25);
					    order.add(l5);
					    
					    JLabel l6 = new JLabel("0");
					    l6.setBounds(164,185,75,25);
					    order.add(l6);
						
						JButton confirm = new JButton("Confirm Order");
						confirm.setBounds(165,295,180,45);
						order.add(confirm);
						
						JLabel cancelLabel = new JLabel("Insert the item no for cancel ");
						cancelLabel.setBounds(75,190,180,75);
						order.add(cancelLabel);
						
						JTextField cancelTxt = new JTextField("10");
						cancelTxt.setBounds(250,210,60,25);
						order.add(cancelTxt);
						
						JButton cancel = new JButton("Cancel");
						cancel.setBounds(335,210,100,25);
						order.add(cancel);
						
						JButton exitt = new JButton("EXIT");
						exitt.setBounds(200, 350, 120, 45);
						order.add(exitt);
						
						exitt.addActionListener(new ActionListener()
						{
							public void actionPerformed(ActionEvent e)
							{
								order.dispose();
								t1.dispose();
								or1.setVisible(true);
								
							}
							
						});
						
						
						JButton okay = new JButton("Calculate");
						okay.setBounds(165,130,100,25);
						order.add(okay);
						
						JButton menu4Back = new JButton("BACK");
						menu4Back.setBounds(240,330,100,100);
						t1.add(menu4Back);
					
						confirm.addActionListener(new ActionListener()
						{
							public void actionPerformed(ActionEvent e)
							{
								
								String tableNum = tableTxt.getText();
								if(tableNum.equals("1"))
								{
									db.orderTableUpdate();
								}
								else if(tableNum.equals("2"))
								{
									db.orderTableUpdate2();	
								}
								
								JFrame yes = new JFrame("SUCCESS");
								JOptionPane.showMessageDialog(yes, "Order Confirmed");
								
								
								//db.orderTableUpdate();
								//order.setVisible(false);
							}
						});
						
						//calculation and confirm starts
						okay.addActionListener(new ActionListener()
						{
							public void actionPerformed(ActionEvent e) 
							{
								String code = getCode.getText() ;
								String quan = quantity.getText() ;
								int L = Integer.valueOf(getCode.getText());
							
									if(L == 101)
									{
										l1.setText(String.valueOf(L));
									}
									else if(L == 102)
									{
										l2.setText(String.valueOf(L));
									}
									else if(L == 103)
									{
										l3.setText(String.valueOf(L));
									}
									else if(L == 104)
									{
										l4.setText(String.valueOf(L));
									}
									
									else if(L == 105)
									{
										l5.setText(String.valueOf(L));
									}
									else if(L == 106)
									{
										l6.setText(String.valueOf(L));
									}
								//}
								
								
								int prc = Integer.valueOf(db.getPrice(code));
								int Q = Integer.valueOf(quan) ;
					
								int x = prc*Q ;
								
								price.setText(String.valueOf(x));
								totalTxt.setText(String.valueOf(Integer.valueOf(price.getText())+ Integer.valueOf(totalTxt.getText())));
								
								db.orderTable(code, quan);
								
							}
							
						});
						//calculation and confirm ends
						
				//cancel starts...
						
						cancel.addActionListener(new ActionListener()
						{
							public void actionPerformed( ActionEvent a )
							{
								String code2 = cancelTxt.getText();
								db.cancelOrder(code2);
								
								totalTxt.setText(String.valueOf(db.getChangedPrice()));
								
								int L=Integer.valueOf(code2) ;
								if(L == 101)
								{
									l1.setText("0");
								}
								else if(L == 102)
								{
									l2.setText("0");
								}
								else if(L == 103)
								{
									l3.setText("0");
								}
								else if(L == 104)
								{
									l4.setText("0");
								}
								
								else if(L == 105)
								{
									l5.setText("0");
								}
								else if(L == 106)
								{
									l6.setText("0");
								}
							}
						});
						
						//cancel ends
						
						menu4Back.addActionListener(new ActionListener()
						{
							public void actionPerformed(ActionEvent e) 
							{
								t1.setVisible(false);
								order.setVisible(false);
								customerFrame.setVisible(true) ;
							}
						});
					}		
			
			
				}
				);
				
			}
		} 
		);
		
		//.........................CustomerFrame ends...........................................................//
	
        WindowKeeper wk=new WindowKeeper();
		or1.addWindowListener(wk);
		//delete.addWindowListener(wk);
	}
	
}