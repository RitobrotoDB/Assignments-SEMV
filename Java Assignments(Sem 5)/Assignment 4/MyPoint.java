import java.util.*;

class MyPoint
{
    int x,y;
    public MyPoint()
    {
        this.x=0;
        this.y=0;
    }
    public MyPoint(int x,int y)
    {
    this.x=x;
    this.y=y;
    }

    public void setXY(int x,int y)
    {
        this.x=x;
        this.y=y;
    }

    public int[] getXY()
    {
        return new int[]{x,y};
    }

    public void result()
    {
    System.out.println("Co-ordinates : ("+x+","+y+")");}

    public double distance(int x,int y)
    {
        int dx=this.x-x;
        int dy=this.y-y;
        double d=(dx*dx)+(dy*dy);
        return Math.sqrt(d);
    }

}

class TestMyPoint
{

    public static void main(String args[]){
    MyPoint p1=new MyPoint();
      System.out.println("Initial co-ordinates : ");
      p1.result();

    MyPoint p2=new MyPoint(2,3);
    System.out.println("Overloaded co-ordinates : ");
      p2.result();

    p1.setXY(5,6);
    System.out.println("Set co-ordinates : ");
    p1.result();

    int[] coordinates=p1.getXY();
        System.out.println("Array co-ordinates : ("+coordinates[0]+","+coordinates[1]+")");

    System.out.println("Enter co-ordinates(x,y) to calculate distance : ");
    Scanner sc=new Scanner(System.in);
    int x1=sc.nextInt();
    int y1=sc.nextInt();

    double dist=p1.distance(x1,y1);
    System.out.println("Distance : "+dist);
}
}
